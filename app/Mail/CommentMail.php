<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\Models\Comment;

class CommentMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $comment;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->comment->email)->markdown('mails.comment.new')->with([
            'title' => $this->comment->post->title,
            'comment' => $this->comment->comment,
            'url' => url('/' . $this->comment->post->slug . '/detail'),
        ]);
    }
}
