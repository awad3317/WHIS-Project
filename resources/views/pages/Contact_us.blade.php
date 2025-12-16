 <div class="contact" id="contact">
        <div class="container">
            <div class="main-heading">
                <div class="address">
                    <img src="{{ asset('assets/images/contact-with-us icon.svg') }}" alt="contact" data-aos="fade-right">
                    <h2 data-aos="fade-left">تواصل معنا</h2>
                </div>
            </div>
            <div class="content" data-aos="fade-right">
                <form action="{{ route('order.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="customer_name">الاسم</label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="أدخل اسمك" required>
                         @error('customer_name')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="number">الرقم</label>
                        <input type="number" id="number" name="number" placeholder="أدخل رقمك" required>
                         @error('number')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" placeholder="أدخل بريدك الإلكتروني" required>
                         @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="message">الرسالة</label>
                        <textarea id="message" rows="5" name="message" placeholder="أدخل رسالتك"></textarea>
                         @error('message')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit">إرسـال</button>
                </form>
                <img src="{{ asset('assets/images/contact img.svg') }}" alt="contact image">
            </div>
        </div>
    </div>