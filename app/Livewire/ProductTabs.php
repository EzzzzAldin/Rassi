<?php

namespace App\Livewire;

use Livewire\Component;

class ProductTabs extends Component
{
    public string $activeTab = 'description';

    public array $openReplies = [];

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function toggleReply($commentId)
    {
        if (in_array($commentId, $this->openReplies)) {

            $this->openReplies = array_diff($this->openReplies, [$commentId]);
        } else {

            $this->openReplies[] = $commentId;
        }
    }

    public function render()
    {
        // مؤقت: تعليقات ثابتة للتجربة
        $comments = [
            ['id' => 1, 'user' => 'User5414', 'content' => 'المحتوي لأي تعليق هناااااا', 'time' => '2 يوم'],
            ['id' => 2, 'user' => 'User1234', 'content' => 'تعليق آخر للتجربة', 'time' => '5 ساعات'],
            ['id' => 3, 'user' => 'User9999', 'content' => 'تعليق ثالث للتجربة', 'time' => '10 دقائق'],
        ];

        return view('livewire.product-tabs', compact('comments'));
    }
}
