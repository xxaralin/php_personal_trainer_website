# php_personal_trainer_website
#index.php sayfası anasayfadır
Proje konum olarak evde spor yapmak isteyen insanlara yardımcı olmak için bir web sitesi hazırlamak istedim. Kullanıcıya boy, kilo, hedefinin kilo vermek mi yoksa kas geliştirmek mi olduğu, eğer kas geliştirmekse de hangi kasları geliştirmek istediğini sorarak bu tercihlere uygun sonuçları veri tabanından çekip kullanıcıya gösteren bir web sitesi yaptım.
![image](https://user-images.githubusercontent.com/67866767/148683548-5a2ab8ba-2e8d-4c9e-9325-d2bc146b2e7b.png)

Şekil 1

Öncelikle giriş sayfasında kullanıcıya kilo vermek mi kas geliştirmek mi istediğini soran bir giriş ekranı yaptım. Sayfanın üst kısmında marka adı ve sosyal medya seçenekleri olan header kısmı var. Onun altında header resmi var. Onun da altında sol kısımda navigasyon kısmı ve sol tarafta da kullanıcının seçim yapacağı kısım var. Burada görsellere basarak istediği hedef ile ilgili sayfaya yönlendirdim.


![image](https://user-images.githubusercontent.com/67866767/148683587-488b1770-8823-44ad-8882-915be89db489.png)

Şekil 2

![image](https://user-images.githubusercontent.com/67866767/148683599-f20094e5-a18c-4fc3-9955-044f9995d33f.png)

Şekil 3

Şekil 2’deki ekran kilo verme yani cardio hareketleri için seçin yapılacak ekran. Şekil 3 ise kas geliştirme seçeneğini seçince karşımıza gelen ve bize yine tercihlerimizin ve hedeflerimizin sorulduğu ekran.
Bana uygun hareketleri bul butonuna basınca da kullanıcının tercihlerine uygun olan hareketler databaseden çekilip kullanıcıya gösteriliyor.(Şekil 4 ve Şekil 5)

![image](https://user-images.githubusercontent.com/67866767/148683663-edde582c-16a9-4f61-b3b5-c79b2399749b.png)

Şekil 4

![image](https://user-images.githubusercontent.com/67866767/148683673-f4a9afb9-0b8d-4ec1-8cb6-b643f3e38d53.png)

Şekil 5

Navigasyon kısmında bulunan hakkımızda, galeri, iletişim kısımlarının ekran görüntüleri aşağıdadır.(Şekil 6, Şekil 7, Şekil 8)
![image](https://user-images.githubusercontent.com/67866767/148683688-749b2548-8e3a-48c5-88a5-c26f49215110.png)

Şekil 6

Hakkımızda sayfasındaki yazılar databaseden çekilmiş olup admin paneli üzerinden değiştirilebilir.


![image](https://user-images.githubusercontent.com/67866767/148683722-d52b23b5-9ae6-4e04-8c4a-80abaf5af645.png)

Şekil 7

Galerideki görseller de databaseden çekilmiştir Düzenleme ya da silme işlemleri admin paneli üzerinden yapılabilir.
![image](https://user-images.githubusercontent.com/67866767/148683741-6f460ed4-06c5-49c1-b52b-8a419ed02709.png)

Şekil 8

Admin paneline tıklayınca da önce karşımıza bir login ekranı geliyor.(şekil 9) Burada kullanıcı adı ve şifreyi girince karşımıza düzenleyebileceğimiz sayfalar geliyor. Bunlar Hakkımızda sayfası ve Galeri sayfası.


![image](https://user-images.githubusercontent.com/67866767/148683763-86f5aa5d-dfc4-4138-893c-8afad0614964.png)

Şekil 9

![image](https://user-images.githubusercontent.com/67866767/148683771-876b5267-607a-4734-80ba-12389b2a31fd.png)

Şekil 10

Hakkımızda sayfasını düzenlemek istiyorsak resme tıklamamız yeterli ve bu bizi düzenle seçeneği bulunan hakkımızda sayfasına götürecek.
![image](https://user-images.githubusercontent.com/67866767/148683800-605655e3-ab51-420d-8508-3c65bf01abf0.png)

Şekil 11

Herhangi bir yazıyı düzenlemek için yanındaki düzenle seçeneğine basmamız yeterli. Bastığımızda seçtiğimiz yazı üzerinde değişiklik yapabileceğimiz ekrana geçeriz.
![image](https://user-images.githubusercontent.com/67866767/148683817-f155312f-7613-4a77-aa46-d50b0199dbb6.png)

Şekil 12

Düzenle tuşuna bastığımızda bizi bir önceki ekrana atar ve yazıyı databaseden değiştirmiş olur ve biz de değişmiş halini görürüz.
Galeriyi düzenlemek istersek de galeriyi düzenle resmine basarak düzenleme yapabileceğimiz sayfaya geçebiliriz.

![image](https://user-images.githubusercontent.com/67866767/148683846-8707c94f-0153-4deb-bda6-f60c2e6c3014.png)

Şekil 13

İstediğimiz satırı düzenlemek için düzenle yazısına basmamız yeterlidir. Bu bizi egzersiz adını, ekipmanı ve örnek gifi değiştirme şansı verir. Düzenleme işi bittikten sonra da bizi tekrar bir önceki sayfaya yönlendirir. Silme işlemi ise direkt olarak işleme alınır. Sil tuşuna bastığımız satır direkt olarak silinir.
![image](https://user-images.githubusercontent.com/67866767/148683869-781ab52c-6318-4343-8425-470cad081fe4.png)

Şekil 14
