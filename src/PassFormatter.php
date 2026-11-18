<?php
namespace SkudUtils;

class PassFormatter
{
    public static function statusText(string $status): string
    {
        $st = strtolower($status);
        return match($st) {
            'allowed', '1', 'ok' => 'Вход разрешен',
            'denied', '0', 'error' => 'Вход запрещен',
            default => $status
        };
    }

    public static function statusClass(string $status): string
    {
        $st = strtolower($status);
        return ($st === 'allowed' || $st === '1' || $st === 'ok') ? 'status-allowed' : 'status-denied';
    }

    public static function formatDate(string $datetime): string
    {
        return date('d.m.y', strtotime($datetime));
    }

    public static function formatTime(string $datetime): string
    {
        return date('H:i', strtotime($datetime));
    }
}