<section class="categories-section py-5">
    <div class="container">


        <div class="row align-items-center mb-4">
            <div class="col-6">
                <h2 class="section-title mb-0">الفئات</h2>
            </div>
            <div class="col-6 text-end">
                <a href="#" class="btn btn-all">عرض الكل</a>
            </div>
        </div>


        <div class="row g-3">
            @for ($i = 1; $i <= 6; $i++)
                <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                    <div class="category-card text-center p-2">
                        <a href="#" class="text-decoration-none d-block">
                            <img src="{{ asset('assets\imgs\image 36.png') }}" alt="فئة {{ $i }}"
                                class="img-fluid rounded mb-2">
                            <h6 class="category-name">اسم الفئة</h6>
                        </a>
                    </div>

                </div>
            @endfor
        </div>

    </div>
</section>
