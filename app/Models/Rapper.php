<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Messages\MailMessage;

class Rapper extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='rapper';
    protected $fillable = [
        'name',
        'email',
        'username',
        'role',
        'password',
        'image_rapper',
        'information',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function Project() : HasMany
    {
        return $this->hasMany(Project:: class, 'rapper_id', 'id');
    }
    public function Comment(): HasMany
    {
        return $this->hasMany(Comment::class, 'rapper_id','id');
    }
}
class CustomResetPasswordNotification extends ResetPassword
    {
    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject('Khôi phục mật khẩu')
        ->line('Bạn vừa yêu cầu ' . config('app.name') . ' khôi phục mật khẩu của mình.')
        ->line('Liên kết đặt lại mật khẩu này sẽ hết hạn sau 60 phút.')
        ->line('Xin vui lòng nhấn vào nút "Khôi phục mật khẩu" bên dưới để tiến hành cấp mật khẩu mới.')
        ->action('Khôi phục mật khẩu', url(config('app.url') . route('password.reset', $this->token, false)))
        ->line('Nếu bạn không yêu cầu đặt lại mật khẩu, xin vui lòng không làm gì thêm và báo lại cho quản trị hệ thống về vấn đề này.');
    }
}
