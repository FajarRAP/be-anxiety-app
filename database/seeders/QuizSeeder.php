<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('quizzes')->insert([
            ['quiz_type_id' => 1, 'title' => 'Perasaan cemas', 'question' => 'Cemas'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan cemas', 'question' => 'Firasat Buruk'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan cemas', 'question' => 'Takut Akan Pikiran Sendiri'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan cemas', 'question' => 'Mudah Tersinggung'],

            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Merasa Tegang'],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Lesu'],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Tak Bisa Istirahat Dengan Tenang'],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Mudah Terkejut'],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Mudah Menangis'],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Gemetar '],
            ['quiz_type_id' => 1, 'title' => 'Ketegangan', 'question' => 'Gelisah'],

            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Pada Gelap'],
            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Pada Orang Asing'],
            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Ditinggal Sendiri'],
            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Pada Bintang Besar'],
            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Pada Keramaian Lalu Lintas'],
            ['quiz_type_id' => 1, 'title' => 'Ketakutan', 'question' => 'Pada Kerumunan Orang Banyak'],

            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Sulit Tidur'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Terbangun Malam Hari'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Tidak Nyenyak'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Bangun Dengan Lesu'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Banyak Mimpi-mimpi'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Mimpi Buruk'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Tidur', 'question' => 'Mimpi Menakutkan'],

            ['quiz_type_id' => 1, 'title' => 'Gangguan Kecerdasan', 'question' => 'Sukar Konsentrasi'],
            ['quiz_type_id' => 1, 'title' => 'Gangguan Kecerdasan', 'question' => 'Daya Ingat Buruk'],

            ['quiz_type_id' => 1, 'title' => 'Perasaan Depresi', 'question' => 'Hilangnya Minat'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan Depresi', 'question' => 'Berkurangnya Kesenangan/Hobi'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan Depresi', 'question' => 'Sedih'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan Depresi', 'question' => 'Bangun dini Hari'],
            ['quiz_type_id' => 1, 'title' => 'Perasaan Depresi', 'question' => 'Perasaan Berubah-Ubah Sepanjang Hari'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Otot)', 'question' => 'Sakit dan Nyeri di Otot-otot'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Otot)', 'question' => 'Kaku'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Otot)', 'question' => 'Kedutan Otot'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Otot)', 'question' => 'Gigi Gemerutuk'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Otot)', 'question' => 'Suara Tidak Stabil'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Sensorik)', 'question' => 'Tinnitus (Telinga Berdenging)'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Sensorik)', 'question' => 'Penglihatan Kabur'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Sensorik)', 'question' => 'Muka Merah atau Pucat'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Sensorik)', 'question' => 'Merasa Lemah'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Somatik (Sensorik)', 'question' => 'Perasaan Ditusuk-Tusuk'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Takhikardia (Detak Jantung Cepat)'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Berdebar'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Nyeri di Dada'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Denyut Nadi Mengeras'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Perasaan Lesu/Lemas Seperti Akan Pingsan'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Kardiovaskular', 'question' => 'Detak Jantung Menghilang (Berhenti Sekejap)'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Resporatori', 'question' => 'Merasa Tertekan atau Sempit di Dada'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Resporatori', 'question' => 'Perasaan Tercekik'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Resporatori', 'question' => 'Sering Menarik Napas'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Resporatori', 'question' => 'Napas Pendek atau Sesak'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Sulit Menelan'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Perut Melilit'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Gangguan Pencernaan'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Nyeri Sebelum dan Sesudah Makan'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Perasaan Terbakar di Perut'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Rasa Penuh Dan Kembung'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Mual'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Muntah'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Buang Air Besar Lembek'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Kehilangan Berat Badan'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Pencernaan', 'question' => 'Sukar Buang Air Besar'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Sering Buang Air Kecil'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Tidak Dapat Menahan Air Seni'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Amenorrhea (Tidak Menstruasi Pada Perempuan)'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Menjadi Dingin'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Ejakulasi Praecocks'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Ereksi Hilang'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Urogenital', 'question' => 'Impotensi'],

            ['quiz_type_id' => 1, 'title' => 'Gejala Otonom', 'question' => 'Mulit Kering'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Otonom', 'question' => 'Muka Merah'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Otonom', 'question' => 'Mudah Berkeringat'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Otonom', 'question' => 'Pusing, Sakit Kepala'],
            ['quiz_type_id' => 1, 'title' => 'Gejala Otonom', 'question' => 'Bulu-Bulu Perdiri'],

            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Gelisah'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Tidak Tenang'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Jari Gemetar'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Kerut kening'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Muka Tegang'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Tonus Otot Meningkat'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Napas Pendek dan Cepat'],
            ['quiz_type_id' => 1, 'title' => 'Tingkah Laku Pada Wawancara', 'question' => 'Muka Merah'],

            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Ada seseorang yang spesial yang selalu siap ketika saya membutuhkannya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Ada seseorang yang spesial yang dengannya saya dapat berbagi suka dan duka'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Keluarga saya selalu berusaha untuk membantu saya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya mendatangkan dukungan emosional dan bantuan yang saya butuhkan dari keluarga saya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya mempunyai seseorang yang spesial yang memberikan kenyamanan'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Teman-teman saya selalu mencoba membantu saya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya bisa mengandalkan teman-teman ketika terjadi sesuatu yang tidak diinginkan'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya dapat menceritakan permasalahan saya kepada keluarga saya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya memiliki teman-teman untuk berbagi suka dan duka'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Ada seseorang yang spesial dalam hidup saya yang peduli mengenai perasaan saya'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Keluarga saya mau membantu saya untuk membuat keputusan'],
            ['quiz_type_id' => 2, 'title' => null, 'question' => 'Saya dapat menceritakan masalah saya kepada teman-teman saya'],


            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa puaskah anda dengan pengobatan diabetes anda saat ini?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa puaskah anda dengan lamanya waktu yang dibutuhkan untuk perawatan diabetes anda?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Apakah anda puas dengan waktu yang anda habiskan untuk mencapai kadar gula yang normal? (diet)'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Apakah anda puas dengan waktu yang anda gunakan untuk berolahraga?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Apakah anda puas dengan beban yang harus dialami keluarga anda karena anda menderita diabetes?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa puaskan anda dengan waktu yang dihabiskan untuk kontrol pemeriksaan diabetes anda?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Apakah anda puas dengan pengetahuan anda tentang diabetes?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa sering anda memakan makanan yang tidak boleh dimakan?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa sering anda khawatir tentang kemungkinan anda akan kehilangan pekerjaan karena anda menderita diabetes?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa sering anda mengalami tidur yang tidak nyenyak karena diabetes?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa sering anda merasa diabetes membatasi karir anda?'],
            ['quiz_type_id' => 3, 'title' => null, 'question' => 'Seberapa sering anda mengalami sakit secara fisik karena diabetes anda?'],
        ]);
    }
}
