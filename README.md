🚀 Laravel API Gateway - Rate Limiting Example

Bu proje, Laravel kullanılarak geliştirilmiş basit bir API Gateway örneğidir.

Amaç, belirli bir endpoint üzerinde rate limiting (istek sınırlama) mekanizmasını uygulamak ve test etmektir.


📌 Proje Amacı

Bu projede:

- Laravel API endpoint oluşturuldu
- Throttle middleware kullanıldı
- 1 dakika içinde maksimum 5 istek sınırı getirildi
- Altıncı istekte **429 (Too Many Requests)** hatası döndürülmesi sağlandı
- Postman ile test edildi

🛠 Kullanılan Teknolojiler

- PHP
- Laravel
- Postman (API testi için)
- Git & GitHub

⚙️ Kurulum

Projeyi klonlayın:

bash

git clone https://github.com/nidaxie/api-gateway.git

cd api-gateway

Bağımlılıkları yükleyin: composer install

.env dosyasını oluşturun: cp .env.example .env

Uygulama key üretin: php artisan key:generate

Sunucuyu başlatın: php artisan serve

🔗 API Endpoint

    GET /api/gateway
    
    Örnek URL: http://127.0.0.1:8000/api/gateway
    
🛡 Rate Limiting Yapısı

Route üzerinde şu middleware kullanılmıştır:

Route::middleware('throttle:5,1')->get('/gateway', function () {
    return response()->json([
        "message" => "Gateway geçti"
    ]);
});

Anlamı:

1 dakika içinde maksimum 5 istek

6. istekte 429 hata

🧪 Test Etme (Postman)

GET isteği oluşturun

URL: http://127.0.0.1:8000/api/gateway

6 kez hızlıca gönderin

istekte 429 hatasını gözlemleyin

📚 Öğrenilen Konular

Laravel Route yapısı

Middleware kullanımı

Rate limiting mantığı

HTTP status kodları

Postman ile API test etme

Git versiyon kontrolü

👩‍💻 Geliştirici

Nida Oruç

GitHub: https://github.com/nidaxie
