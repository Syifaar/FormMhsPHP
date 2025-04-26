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
   - **Langkah 1**: Buka Google Colab [di sini](https://colab.research.google.com).
   - **Langkah 2**: Pilih **File** → **Upload notebook** dan unggah file `submission_akhir_klasifikasi_gambar.ipynb` dari folder **submission_Klasifikasi Gambar**.
   - **Langkah 3**: Pastikan semua dependensi telah diinstal. Di Colab, cukup jalankan sel berikut:
     ```python
     !pip install -r submission/requirements.txt
     ```
   - **Langkah 4**: Jalankan seluruh sel pada notebook untuk memulai proses training, evaluasi, dan prediksi model.

   **Catatan**: Google Colab sudah menyediakan GPU secara gratis, sehingga lebih cepat untuk training model.

---

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

   - **Langkah 4**: Jika menggunakan **TensorFlow GPU**, pastikan **CUDA** dan **cuDNN** telah terinstal di komputer. Jika tidak, proyek ini masih dapat berjalan di CPU.

   - **Langkah 5**: Pastikan path ke folder model (`saved_model`, `tflite`, `tfjs_model`) sudah benar. Jika perlu, sesuaikan path di dalam notebook atau file Python dengan lokasi folder di lokal.

   - **Langkah 6**: Jalankan file Python atau notebook di lokal:
     - Untuk notebook:
       - Buka `submission_akhir_klasifikasi_gambar.ipynb` di VS Code menggunakan **Jupyter Notebook** atau **VS Code Python extension**.
       - Jalankan seluruh sel untuk melakukan training dan prediksi.

   - **Langkah 7**: Jika ingin menggunakan model, pastikan model yang digunakan ada di folder `submission/saved_model`, `submission/tflite`, atau `submission/tfjs_model`.

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
