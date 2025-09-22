<div>
    <div class="col-md-12">
        <div class="border d-flex gap-4 mineNave mt-3 p-2">
            <h4 class="m-0 {{ $activeTab === 'description' ? 'active' : '' }}" wire:click="setTab('description')">
                الوصف
            </h4>
            <h4 class="m-0 {{ $activeTab === 'policy' ? 'active' : '' }}" wire:click="setTab('policy')">
                الشروط والاحكام
            </h4>
            <h4 class="m-0 {{ $activeTab === 'comments' ? 'active' : '' }}" wire:click="setTab('comments')">
                التعليقات
            </h4>
        </div>

        <div class="valSection">
            @if ($activeTab === 'description')
                <div class="border border-top-0 dis p-3">
                    ابل ايفون 16 برو‏ (128‎ GB) تيتانيوم أسود , جديد غير مستخدم أصلي بالضمان من السعودية .

                    تصميم من التيتانيوم ولا أروع — يتميز iPhone 16 Pro بتصميم كله قوة وخفة مع شاشة ريتنا سوبر XDR
                    مقاس
                    6.3 إنش أكبر، ومتانته عالية بفضل أحدث جيل من درع السيراميك الأقوى 2x من زجاج أي هاتف ذكي. بين
                    يديك
                    كل التحكم في الكاميرا — تمنحك وحدة التحكم في الكاميرا طريقة أسهل للوصول بسرعة إلى أدوات
                    الكاميرا،
                    مثل الزووم أو عمق المجال، لتتمكن من التقاط صور مثالية في أوقات قياسية. لقطات خلابة — بفضل كاميرا
                    واسعة للغاية 48MP أكثر تطوراً، يمكنك أن تصور بالماكرو روائع فائقة الصغر أو تلتقط مشاهد بانورامية
                    على
                    مد النظر. هل تريد لقطات أوضح من مسافة أبعد؟ المهمة ولا أسهل مع كاميرا تقريب المسافات 5x.
                    فيديوهات
                    Pro — انتقل بفيديوهاتك إلى آفاق جديدة كلياً مع كاميرا 48MP Fusion التي تدعم تنسيق 4K Dolby
                    Vision
                    بمعدل 120 إطاراً في الثانية وميكروفونات بجودة الاستوديوهات الاحترافية تعزز نقاء التسجيلات. في
                    جيبك
                    استوديو احترافي. الأنماط الفوتوغرافية — يمنحك أحدث جيل من الأنماط الفوتوغرافية حرية إبداعية غير
                    مسبوقة كي تضع المزيد منك في كل صورة عنك.
                </div>
            @endif

            @if ($activeTab === 'policy')
                <div class="policy border border-top-0 p-3">
                    ابل ايفون 16 برو‏ (128‎ GB) تيتانيوم أسود , جديد غير مستخدم أصلي بالضمان من السعودية .

                    تصميم من التيتانيوم ولا أروع — يتميز iPhone 16 Pro بتصميم كله قوة وخفة مع شاشة ريتنا سوبر XDR
                    مقاس
                    6.3 إنش أكبر، ومتانته عالية بفضل أحدث جيل من درع السيراميك الأقوى 2x من زجاج أي هاتف ذكي. بين
                    يديك
                    كل التحكم في الكاميرا — تمنحك وحدة التحكم في الكاميرا طريقة أسهل للوصول بسرعة إلى أدوات
                    الكاميرا،
                    مثل الزووم أو عمق المجال، لتتمكن من التقاط صور مثالية في أوقات قياسية. لقطات خلابة — بفضل كاميرا
                    واسعة للغاية 48MP أكثر تطوراً، يمكنك أن تصور بالماكرو روائع فائقة الصغر أو تلتقط مشاهد بانورامية
                    على
                    مد النظر. هل تريد لقطات أوضح من مسافة أبعد؟ المهمة ولا أسهل مع كاميرا تقريب المسافات 5x.
                    فيديوهات
                    Pro — انتقل بفيديوهاتك إلى آفاق جديدة كلياً مع كاميرا 48MP Fusion التي تدعم تنسيق 4K Dolby
                    Vision
                    بمعدل 120 إطاراً في الثانية وميكروفونات بجودة الاستوديوهات الاحترافية تعزز نقاء التسجيلات. في
                    جيبك
                    استوديو احترافي. الأنماط الفوتوغرافية — يمنحك أحدث جيل من الأنماط الفوتوغرافية حرية إبداعية غير
                    مسبوقة كي تضع المزيد منك في كل صورة عنك.
                </div>
            @endif

            @if ($activeTab === 'comments')
                <div class="border border-top-0 commentsSection">
                    @foreach ($comments as $comment)
                        <div class="commentSection">
                            <div class="imgNameComment pb-4">
                                <div class="d-flex gap-2 image p-4 pb-2">
                                    <img src="{{ asset('assets/imgs/auctionShow/Ellipse7.png') }}" alt="">
                                    <div class="align-items-center d-flex justify-content-between nameComment w-100">
                                        <div>
                                            <div class="name opacity-50">{{ $comment['user'] }}</div>
                                            <div class="commant">{{ $comment['content'] }}</div>
                                        </div>
                                        <div class="from opacity-50">{{ $comment['time'] }}</div>
                                    </div>
                                </div>
                                <div class="align-items-center d-flex flex-column gap-2 pb-0 pt-0 replayComment">
                                    <div class="align-items-center d-flex gap-2 icon"
                                        wire:click="toggleReply({{ $comment['id'] }})" style="cursor: pointer;">
                                        <img src="{{ asset('assets/imgs/auctionShow/Vector(1).png') }}" alt="">
                                        رد
                                    </div>

                                    @if (in_array($comment['id'], $openReplies))
                                        <input type="text" class="recomment p-2 border-0" placeholder="اكتب تعليقا">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>

</div>
