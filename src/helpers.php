<?php
namespace SkudUtils;

function pass_status_text(string $status): string
{
    return PassFormatter::statusText($status);
}

function pass_status_class(string $status): string
{
    return PassFormatter::statusClass($status);
}

function format_date(string $datetime): string
{
    return PassFormatter::formatDate($datetime);
}

function format_time(string $datetime): string
{
    return PassFormatter::formatTime($datetime);
}