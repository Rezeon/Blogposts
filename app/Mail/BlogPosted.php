<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BlogPosted extends Mailable
{
    use Queueable, SerializesModels;
    
    protected $post;

    /**
     * Create a new message instance.
     */
    public function __construct($post)
    {
        $this->post = $post;
    }

    /**
     * Get the message envelope.
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('rheyno@gmail.com', 'wewq'),
            subject: "Blog Posted: " . ($this->post->title ?? 'No Title'),


        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mails.blog_posted',
            with: [
                'post' => $this->post
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
