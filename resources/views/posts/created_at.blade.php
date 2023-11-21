@php
    $postDate = \Carbon\Carbon::parse($post->created_at);
    $now = \Carbon\Carbon::now();

    $diffInSeconds = $postDate->diffInSeconds($now);

    if ($diffInSeconds < 60) {
        // Less than a minute ago
        echo $diffInSeconds . ' seconds ago';
    } elseif ($diffInSeconds < 3600) {
        // Less than an hour ago
        echo $postDate->diffInMinutes($now) . ' minutes ago';
    } elseif ($diffInSeconds < 86400) {
        // Less than a day ago
        echo $postDate->diffInHours($now) . ' hours ago';
    } elseif ($diffInSeconds < 604800) {
        // Less than a week ago
        echo $postDate->diffInDays($now) . ' days ago';
    } elseif ($postDate->year == $now->year) {
        // Within the current year
        echo $postDate->format('j F');
    } else {
        // More than a year ago
        echo $postDate->format('j F Y');
    }
@endphp
