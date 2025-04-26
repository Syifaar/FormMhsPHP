## Submission Akhir Klasifikasi Gambar

### Deskripsi
Proyek ini mengimplementasikan klasifikasi gambar menggunakan **TensorFlow**. Model yang digunakan dapat disimpan dalam beberapa format, yaitu:
- **SavedModel** (untuk penggunaan langsung dengan TensorFlow).
- **TensorFlow Lite** (untuk perangkat mobile).
- **TensorFlow.js** (untuk aplikasi berbasis web).

Proyek ini dikembangkan dan dijalankan di **Google Colab**, namun dapat dijalankan di lingkungan lokal dengan sedikit penyesuaian.

---

### Struktur Proyek

- `submission_akhir_klasifikasi_gambar.ipynb`: Notebook utama yang berisi seluruh proses training, evaluasi, dan prediksi model.
- `submission/requirements.txt`: File yang berisi daftar dependensi yang digunakan dalam proyek ini.
- `submission/README.md`: Dokumentasi ini.
- `submission/tfjs_model`: Folder yang berisi model yang telah dikonversi ke format **TensorFlow.js**.
- `submission/saved_model`: Folder yang berisi model dalam format **SavedModel** dari TensorFlow.
- `submission/tflite`: Folder yang berisi model yang telah dikonversi ke format **TensorFlow Lite** (`.tflite`).

---

### Cara Menjalankan Proyek

#### 1. **Menjalankan di Google Colab (Rekomendasi)**

1. **Upload Notebook**
   - Buka [Google Colab](https://colab.research.google.com/)
   - Upload file `submission_akhir_klasifikasi_gambar.ipynb`

2. **Upload API Key Kaggle**
   - Diperlukan untuk mengunduh dataset dari Kaggle.
   - Langkah-langkah:
     - Login ke [Kaggle](https://www.kaggle.com)
     - Masuk ke akun → **Account** → **Create New API Token**
     - File `kaggle.json` akan otomatis terunduh
     - Upload file tersebut di Colab dengan kode berikut:
       ```python
       from google.colab import files
       files.upload()  # Upload kaggle.json
       ```
     - Jalankan konfigurasi berikut:
       ```python
       !mkdir -p ~/.kaggle
       !cp kaggle.json ~/.kaggle/
       !chmod 600 ~/.kaggle/kaggle.json
       ```

3. **Unduh Dataset dari Kaggle**
   - Setelah `kaggle.json` terkonfigurasi:
     ```python
     !kaggle datasets download -d aditmagotra/gameplay-images
     !unzip gameplay-images.zip
     ```

4. **Jalankan Notebook**
   - Jalankan sel-sel secara berurutan dari atas ke bawah untuk memproses data, melatih model, dan menyimpan hasil konversi model.
     
#### 2. **Menjalankan di Lokal (VS Code / Terminal)**
   Untuk menjalankan proyek di **lingkungan lokal**, pastikan mengikuti langkah-langkah berikut:

   - **Langkah 1**: Ekstrak file ZIP dan navigasi ke folder proyek di terminal atau VS Code.
   - **Langkah 2**: Buat dan aktifkan **virtual environment** (disarankan untuk menghindari konflik dependensi):
     ```bash
     python -m venv venv
     # Untuk Windows:
     .\venv\Scripts\activate
     # Untuk Mac/Linux:
     source venv/bin/activate
     ```
   - **Langkah 3**: Install semua dependensi yang dibutuhkan:
     ```bash
     pip install -r submission/requirements.txt
     ```
   - **Langkah 4**: Siapkan kaggle.json
     - Login ke https://www.kaggle.com
     - Masuk ke menu Account > Create New API Token
     - File kaggle.json akan terunduh secara otomatis
      Simpan file tersebut ke direktori berikut:
        Untuk Windows:
       
           mkdir %USERPROFILE%\.kaggle
           copy path\to\kaggle.json %USERPROFILE%\.kaggle\
       
       Untuk Mac/Linux:
       
            mkdir -p ~/.kaggle
            cp path/to/kaggle.json ~/.kaggle/
            chmod 600 ~/.kaggle/kaggle.json

   - **Langkah 5** : Unduh Dataset
   Gunakan perintah berikut untuk mengunduh dataset dari Kaggle:

         kaggle datasets download -d aditmagotra/gameplay-images
   Setelah proses unduh selesai, ekstrak file-nya:

      unzip gameplay-images.zip
      # atau gunakan tar -xf jika dataset dalam format .tar
      
   - **Langkah 6**: Jalankan Notebook

     - Buka file submission_akhir_klasifikasi_gambar.ipynb menggunakan Jupyter Notebook atau VS Code (dengan Jupyter Extension)

      - Jalankan seluruh cell secara berurutan dari atas ke bawah
---



### Dependensi Utama
Pastikan kamu menginstal paket-paket berikut di lingkungan lokal:
- **TensorFlow**
- **Keras**
- **NumPy**
- **Pandas**
- **OpenCV**
- **Matplotlib**
- **scikit-learn**
- **Pillow**

Dependensi ini sudah tercantum dalam `requirements.txt`.

---

### Catatan Tambahan
- Proyek ini dikembangkan di Google Colab, jadi jika ada masalah atau error di lokal, bisa jadi terkait dengan perbedaan versi library atau konfigurasi sistem.
- Jika ingin mengoptimalkan penggunaan model di **mobile** atau **web**, gunakan model yang ada di folder **`tflite`** atau **`tfjs_model`**.
- **Google Colab** adalah pilihan terbaik jika kamu ingin menghindari masalah konfigurasi lokal, karena sudah menyediakan semua yang dibutuhkan, termasuk GPU.

---

### Masalah Umum dan Solusi
- **Masalah Dependensi**: Jika ada masalah dengan instalasi dependensi, pastikan kamu menggunakan **virtual environment** untuk menghindari konflik dengan instalasi lain.
- **Masalah Path File**: Di lokal, pastikan path file ke model dan dataset sudah disesuaikan dengan struktur folder di komputermu.
- **Masalah GPU**: Jika tidak memiliki GPU, proyek ini tetap bisa dijalankan menggunakan **CPU**, meskipun lebih lambat.

---
