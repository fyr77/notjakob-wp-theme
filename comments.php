<?php
// Get only the approved comments
$args = array(
    'status' => 'approve',
);

// The comment Query
$comments_query = new WP_Comment_Query();
$comments = $comments_query->query($args); ?>

<div class="container_proj">
<?php
// Comment Loop
if ($comments) {
    foreach ($comments as $comment) {
        echo '<p>' . $comment->comment_content . '</p>';
    }
} else {
    echo 'No comments found.';
}
?>
</div>