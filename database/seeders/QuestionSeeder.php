<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Data soal per mata pelajaran: IPA, IPS, Bahasa Indonesia (150 soal masing-masing).
     * Struktur tiap soal: payload, correct_answer (A/B/C/D), options (A/B/C/D => teks jawaban)
     */
    protected array $data = [
        'IPA' => [
            [
                'payload' => 'Rusa termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Vitamin yang dapat diperoleh dari sinar matahari adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Vitamin A',
                    'B' => 'Vitamin C',
                    'C' => 'Vitamin D',
                    'D' => 'Vitamin K',
                ],
            ],
            [
                'payload' => 'Gabungan dua unsur atau lebih secara kimia disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Campuran',
                    'B' => 'Larutan',
                    'C' => 'Unsur',
                    'D' => 'Senyawa',
                ],
            ],
            [
                'payload' => 'Perpindahan panas melalui zat padat disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Konduksi',
                    'B' => 'Radiasi',
                    'C' => 'Induksi',
                    'D' => 'Konveksi',
                ],
            ],
            [
                'payload' => 'Singa termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Panda termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Herbivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Elang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Peristiwa bumi mengelilingi matahari disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Gravitasi',
                    'B' => 'Rotasi bumi',
                    'C' => 'Orbit',
                    'D' => 'Revolusi bumi',
                ],
            ],
            [
                'payload' => 'Proses pengembunan uap air menjadi titik-titik air disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Presipitasi',
                    'B' => 'Evaporasi',
                    'C' => 'Kondensasi',
                    'D' => 'Infiltrasi',
                ],
            ],
            [
                'payload' => 'Lapisan bumi paling luar tempat manusia tinggal disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mantel bumi',
                    'B' => 'Inti dalam',
                    'C' => 'Inti luar',
                    'D' => 'Kerak bumi',
                ],
            ],
            [
                'payload' => 'Energi yang dihasilkan dari matahari disebut energi?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Surya',
                    'B' => 'Angin',
                    'C' => 'Air',
                    'D' => 'Panas bumi',
                ],
            ],
            [
                'payload' => 'Perubahan wujud dari gas menjadi cair disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Membeku',
                    'B' => 'Menyublim',
                    'C' => 'Menguap',
                    'D' => 'Mengembun',
                ],
            ],
            [
                'payload' => 'Perubahan wujud dari padat menjadi gas disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Membeku',
                    'B' => 'Mengembun',
                    'C' => 'Menyublim',
                    'D' => 'Mencair',
                ],
            ],
            [
                'payload' => 'Lapisan bumi yang berupa cairan panas dan pijar disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Mantel bumi',
                    'B' => 'Inti luar',
                    'C' => 'Kerak bumi',
                    'D' => 'Atmosfer',
                ],
            ],
            [
                'payload' => 'Babi termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menggerakkan tubuh adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Tulang',
                    'B' => 'Hidung',
                    'C' => 'Pankreas',
                    'D' => 'Otot',
                ],
            ],
            [
                'payload' => 'Hyena termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Kera termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Kuda nil termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Kelinci termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Kalkun termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Karnivora',
                    'C' => 'Herbivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Kekurangan vitamin C dapat menyebabkan penyakit?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Beri-beri',
                    'B' => 'Skorbut',
                    'C' => 'Rakitis',
                    'D' => 'Anemia',
                ],
            ],
            [
                'payload' => 'Golongan darah yang disebut donor universal adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'B',
                    'B' => 'A',
                    'C' => 'AB',
                    'D' => 'O',
                ],
            ],
            [
                'payload' => 'Hewan yang hidup di dua alam (darat dan air) disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Amfibi',
                    'B' => 'Pisces',
                    'C' => 'Mamalia',
                    'D' => 'Reptil',
                ],
            ],
            [
                'payload' => 'Komodo termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Itik termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Satelit alami bumi adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Matahari',
                    'B' => 'Bulan',
                    'C' => 'Mars',
                    'D' => 'Bintang',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk pertukaran oksigen dan karbon dioksida adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Lidah',
                    'B' => 'Jantung',
                    'C' => 'Lambung',
                    'D' => 'Paru-paru',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mengecap rasa adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Trakea',
                    'B' => 'Telinga',
                    'C' => 'Kulit',
                    'D' => 'Lidah',
                ],
            ],
            [
                'payload' => 'Organel sel yang berfungsi sebagai penghasil energi adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Nukleus',
                    'B' => 'Lisosom',
                    'C' => 'Mitokondria',
                    'D' => 'Ribosom',
                ],
            ],
            [
                'payload' => 'Bencana alam akibat pergeseran lempeng bumi disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Tanah longsor',
                    'B' => 'Gempa bumi',
                    'C' => 'Tsunami',
                    'D' => 'Banjir',
                ],
            ],
            [
                'payload' => 'Landak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Gunting dan jungkat-jungkit adalah contoh penerapan?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Roda berporos',
                    'B' => 'Bidang miring',
                    'C' => 'Katrol',
                    'D' => 'Pengungkit (tuas)',
                ],
            ],
            [
                'payload' => 'Perpindahan panas tanpa melalui zat perantara disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konveksi',
                    'B' => 'Radiasi',
                    'C' => 'Induksi',
                    'D' => 'Konduksi',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk alat perkembangbiakan tumbuhan adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Biji',
                    'B' => 'Daun',
                    'C' => 'Bunga',
                    'D' => 'Batang',
                ],
            ],
            [
                'payload' => 'Burung hantu termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk tempat berlangsungnya fotosintesis adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Akar',
                    'B' => 'Buah',
                    'C' => 'Daun',
                    'D' => 'Bunga',
                ],
            ],
            [
                'payload' => 'Sapi termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk melindungi biji adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Biji',
                    'B' => 'Bunga',
                    'C' => 'Buah',
                    'D' => 'Batang',
                ],
            ],
            [
                'payload' => 'Monyet termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Bahan yang dapat menghantarkan listrik dengan baik disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Magnetik',
                    'B' => 'Isolator',
                    'C' => 'Semikonduktor',
                    'D' => 'Konduktor',
                ],
            ],
            [
                'payload' => 'Bahan yang tidak dapat menghantarkan listrik disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konduktor',
                    'B' => 'Isolator',
                    'C' => 'Magnetik',
                    'D' => 'Semikonduktor',
                ],
            ],
            [
                'payload' => 'Gas yang dibutuhkan makhluk hidup untuk bernapas adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karbon dioksida',
                    'B' => 'Hidrogen',
                    'C' => 'Nitrogen',
                    'D' => 'Oksigen',
                ],
            ],
            [
                'payload' => 'Gajah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Bison termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Ular kobra termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Lapisan air yang menutupi permukaan bumi disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Biosfer',
                    'B' => 'Atmosfer',
                    'C' => 'Litosfer',
                    'D' => 'Hidrosfer',
                ],
            ],
            [
                'payload' => 'Gaya yang menarik benda menuju pusat bumi disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Gesekan',
                    'B' => 'Pegas',
                    'C' => 'Gravitasi',
                    'D' => 'Magnet',
                ],
            ],
            [
                'payload' => 'Pusat tata surya adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Matahari',
                    'B' => 'Bulan',
                    'C' => 'Bumi',
                    'D' => 'Bintang',
                ],
            ],
            [
                'payload' => 'Materi genetik yang membawa sifat keturunan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Protein',
                    'B' => 'RNA',
                    'C' => 'Enzim',
                    'D' => 'DNA',
                ],
            ],
            [
                'payload' => 'Ular piton termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Jerapah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk memberi bentuk dan menopang tubuh adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Tulang',
                    'B' => 'Hidung',
                    'C' => 'Ginjal',
                    'D' => 'Telinga',
                ],
            ],
            [
                'payload' => 'Zat makanan yang berfungsi sebagai sumber energi utama adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Lemak',
                    'B' => 'Karbohidrat',
                    'C' => 'Vitamin',
                    'D' => 'Protein',
                ],
            ],
            [
                'payload' => 'Harimau termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Alat yang digunakan untuk menimba air dari sumur termasuk contoh?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Katrol',
                    'B' => 'Bidang miring',
                    'C' => 'Pengungkit',
                    'D' => 'Roda berporos',
                ],
            ],
            [
                'payload' => 'Macan tutul termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Peristiwa bumi berputar pada porosnya disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Revolusi bumi',
                    'B' => 'Gravitasi',
                    'C' => 'Orbit',
                    'D' => 'Rotasi bumi',
                ],
            ],
            [
                'payload' => 'Gerhana yang terjadi saat bulan berada di antara matahari dan bumi disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Gerhana total',
                    'B' => 'Gerhana bulan',
                    'C' => 'Gerhana matahari',
                    'D' => 'Gerhana sebagian',
                ],
            ],
            [
                'payload' => 'Kanguru termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Magnet memiliki dua kutub, yaitu?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kutub positif dan netral',
                    'B' => 'Kutub timur dan barat',
                    'C' => 'Kutub atas dan bawah',
                    'D' => 'Kutub utara dan kutub selatan',
                ],
            ],
            [
                'payload' => 'Alat untuk mengukur suhu disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Anemometer',
                    'B' => 'Barometer',
                    'C' => 'Termometer',
                    'D' => 'Higrometer',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyerap sari-sari makanan adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Otak',
                    'C' => 'Usus halus',
                    'D' => 'Pankreas',
                ],
            ],
            [
                'payload' => 'Serigala termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Unta termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Zat tunggal yang tidak dapat diuraikan lagi secara kimia disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Senyawa',
                    'B' => 'Larutan',
                    'C' => 'Unsur',
                    'D' => 'Campuran',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyaring darah dan membentuk urine adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Paru-paru',
                    'C' => 'Trakea',
                    'D' => 'Ginjal',
                ],
            ],
            [
                'payload' => 'Bebek termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Orangutan termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Alat untuk mengukur getaran gempa bumi disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Termometer',
                    'B' => 'Barometer',
                    'C' => 'Anemometer',
                    'D' => 'Seismograf',
                ],
            ],
            [
                'payload' => 'Buaya termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Gelombang besar akibat gempa di dasar laut disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Badai',
                    'B' => 'Banjir bandang',
                    'C' => 'Tsunami',
                    'D' => 'Gempa bumi',
                ],
            ],
            [
                'payload' => 'Rubah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Omnivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang menyerap air paling banyak adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Bunga',
                    'B' => 'Batang',
                    'C' => 'Rambut akar',
                    'D' => 'Daun',
                ],
            ],
            [
                'payload' => 'Gabungan dua zat atau lebih tanpa reaksi kimia disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Unsur',
                    'B' => 'Senyawa',
                    'C' => 'Campuran',
                    'D' => 'Molekul',
                ],
            ],
            [
                'payload' => 'Paus pembunuh termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Omnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Jumlah tulang pada tubuh manusia dewasa adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '206',
                    'B' => '215',
                    'C' => '210',
                    'D' => '201',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mencium bau adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Kerongkongan',
                    'B' => 'Telinga',
                    'C' => 'Hidung',
                    'D' => 'Tulang',
                ],
            ],
            [
                'payload' => 'Benda yang dapat ditarik oleh magnet disebut benda?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Non-magnetik',
                    'B' => 'Konduktor',
                    'C' => 'Magnetik',
                    'D' => 'Isolator',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menetralkan racun dalam tubuh adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Hidung',
                    'B' => 'Usus besar',
                    'C' => 'Hati',
                    'D' => 'Telinga',
                ],
            ],
            [
                'payload' => 'Banteng termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Simbol kimia untuk air adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'O2',
                    'B' => 'H2O',
                    'C' => 'CO2',
                    'D' => 'NaCl',
                ],
            ],
            [
                'payload' => 'Musang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menghasilkan hormon insulin adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tulang',
                    'B' => 'Usus besar',
                    'C' => 'Pankreas',
                    'D' => 'Otak',
                ],
            ],
            [
                'payload' => 'Alat pernapasan ikan adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Trakea',
                    'B' => 'Insang',
                    'C' => 'Kulit',
                    'D' => 'Paru-paru',
                ],
            ],
            [
                'payload' => 'Hormon yang mengatur kadar gula darah adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Tiroksin',
                    'B' => 'Insulin',
                    'C' => 'Estrogen',
                    'D' => 'Adrenalin',
                ],
            ],
            [
                'payload' => 'Zat makanan yang berfungsi untuk pertumbuhan dan perbaikan sel adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mineral',
                    'B' => 'Lemak',
                    'C' => 'Karbohidrat',
                    'D' => 'Protein',
                ],
            ],
            [
                'payload' => 'Tangga dan sekrup adalah contoh penerapan?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Bidang miring',
                    'B' => 'Roda berporos',
                    'C' => 'Pengungkit',
                    'D' => 'Katrol',
                ],
            ],
            [
                'payload' => 'Ayam termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Tapir termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Planet terbesar dalam tata surya adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Neptunus',
                    'B' => 'Saturnus',
                    'C' => 'Uranus',
                    'D' => 'Jupiter',
                ],
            ],
            [
                'payload' => 'Perubahan wujud dari cair menjadi gas disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Menguap',
                    'B' => 'Mengembun',
                    'C' => 'Membeku',
                    'D' => 'Menyublim',
                ],
            ],
            [
                'payload' => 'Kuda termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Alat untuk mengukur tekanan udara disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Anemometer',
                    'B' => 'Barometer',
                    'C' => 'Termometer',
                    'D' => 'Higrometer',
                ],
            ],
            [
                'payload' => 'Lapisan udara yang menyelimuti bumi disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Hidrosfer',
                    'B' => 'Atmosfer',
                    'C' => 'Biosfer',
                    'D' => 'Litosfer',
                ],
            ],
            [
                'payload' => 'Zat hijau daun yang berperan dalam fotosintesis disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Xantofil',
                    'B' => 'Karoten',
                    'C' => 'Klorofil',
                    'D' => 'Antosianin',
                ],
            ],
            [
                'payload' => 'Domba termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Gerhana yang terjadi saat bumi berada di antara matahari dan bulan disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Gerhana matahari',
                    'B' => 'Gerhana bulan',
                    'C' => 'Gerhana parsial',
                    'D' => 'Gerhana cincin',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mencerna makanan secara kimiawi adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Lambung',
                    'B' => 'Paru-paru',
                    'C' => 'Telinga',
                    'D' => 'Usus halus',
                ],
            ],
            [
                'payload' => 'Cahaya merambat lurus dan dapat mengalami?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Hanya pembiasan',
                    'B' => 'Hanya pemantulan',
                    'C' => 'Pemantulan dan pembiasan',
                    'D' => 'Tidak keduanya',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk mendengar adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Pankreas',
                    'B' => 'Hidung',
                    'C' => 'Telinga',
                    'D' => 'Otak',
                ],
            ],
            [
                'payload' => 'Zat makanan cadangan energi yang disimpan di bawah kulit adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Vitamin',
                    'B' => 'Protein',
                    'C' => 'Karbohidrat',
                    'D' => 'Lemak',
                ],
            ],
            [
                'payload' => 'Rakun termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Proses tumbuhan membuat makanan sendiri menggunakan cahaya matahari disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Fermentasi',
                    'B' => 'Transpirasi',
                    'C' => 'Fotosintesis',
                    'D' => 'Respirasi',
                ],
            ],
            [
                'payload' => 'Badak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Herbivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Organisme yang menguraikan sisa makhluk hidup disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konsumen',
                    'B' => 'Dekomposer',
                    'C' => 'Herbivora',
                    'D' => 'Produsen',
                ],
            ],
            [
                'payload' => 'Organel sel yang mengatur seluruh kegiatan sel adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Nukleus',
                    'B' => 'Ribosom',
                    'C' => 'Mitokondria',
                    'D' => 'Vakuola',
                ],
            ],
            [
                'payload' => 'Kelompok hewan yang menyusui anaknya disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Mamalia',
                    'B' => 'Aves',
                    'C' => 'Reptil',
                    'D' => 'Amfibi',
                ],
            ],
            [
                'payload' => 'Zebra termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Antelop termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk menyerap air dan mineral dari dalam tanah adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Akar',
                    'B' => 'Batang',
                    'C' => 'Buah',
                    'D' => 'Biji',
                ],
            ],
            [
                'payload' => 'Simpanse termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Peristiwa pembelokan arah rambat cahaya disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Interferensi',
                    'B' => 'Pemantulan',
                    'C' => 'Pembauran',
                    'D' => 'Pembiasan',
                ],
            ],
            [
                'payload' => 'Kambing termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Hewan yang mengalami metamorfosis sempurna contohnya adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Belalang',
                    'B' => 'Kupu-kupu',
                    'C' => 'Capung',
                    'D' => 'Kecoa',
                ],
            ],
            [
                'payload' => 'Unit terkecil penyusun makhluk hidup disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Organ',
                    'B' => 'Jaringan',
                    'C' => 'Sistem organ',
                    'D' => 'Sel',
                ],
            ],
            [
                'payload' => 'Gagak termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk memompa darah ke seluruh tubuh adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Jantung',
                    'C' => 'Hati',
                    'D' => 'Lidah',
                ],
            ],
            [
                'payload' => 'Planet yang dikenal sebagai planet merah adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Jupiter',
                    'B' => 'Merkurius',
                    'C' => 'Venus',
                    'D' => 'Mars',
                ],
            ],
            [
                'payload' => 'Koala termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Rantai makanan dimulai dari organisme yang disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konsumen II',
                    'B' => 'Produsen',
                    'C' => 'Konsumen I',
                    'D' => 'Dekomposer',
                ],
            ],
            [
                'payload' => 'Contoh sumber karbohidrat adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Sayur dan buah',
                    'B' => 'Minyak dan mentega',
                    'C' => 'Nasi dan kentang',
                    'D' => 'Daging dan telur',
                ],
            ],
            [
                'payload' => 'Burung elang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Karnivora',
                    'C' => 'Herbivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyerap air dan membentuk feses adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Usus besar',
                    'B' => 'Hati',
                    'C' => 'Hidung',
                    'D' => 'Usus halus',
                ],
            ],
            [
                'payload' => 'Hiu termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Karnivora',
                    'C' => 'Insektivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Perubahan wujud dari cair menjadi padat disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Menguap',
                    'B' => 'Membeku',
                    'C' => 'Menyublim',
                    'D' => 'Mencair',
                ],
            ],
            [
                'payload' => 'Musang air termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Insektivora',
                    'D' => 'Karnivora',
                ],
            ],
            [
                'payload' => 'Roda yang berporos termasuk jenis pesawat sederhana?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Roda berporos',
                    'B' => 'Katrol',
                    'C' => 'Pengungkit',
                    'D' => 'Bidang miring',
                ],
            ],
            [
                'payload' => 'Kucing liar termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Insektivora',
                ],
            ],
            [
                'payload' => 'Cheetah termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Herbivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Anjing liar termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Herbivora',
                    'C' => 'Karnivora',
                    'D' => 'Omnivora',
                ],
            ],
            [
                'payload' => 'Contoh sumber protein nabati adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Nasi dan kentang',
                    'B' => 'Tahu dan tempe',
                    'C' => 'Minyak dan mentega',
                    'D' => 'Daging dan telur',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk menyalurkan air serta menopang tumbuhan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Batang',
                    'B' => 'Daun',
                    'C' => 'Bunga',
                    'D' => 'Buah',
                ],
            ],
            [
                'payload' => 'Beruang termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Omnivora',
                    'B' => 'Insektivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Bunyi dapat merambat melalui media?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Hanya padat',
                    'B' => 'Hanya cair',
                    'C' => 'Hanya gas',
                    'D' => 'Padat, cair, dan gas',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyalurkan udara menuju paru-paru adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Jantung',
                    'B' => 'Usus besar',
                    'C' => 'Ginjal',
                    'D' => 'Trakea',
                ],
            ],
            [
                'payload' => 'Proses penguapan air dari permukaan bumi karena panas matahari disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Presipitasi',
                    'B' => 'Infiltrasi',
                    'C' => 'Evaporasi',
                    'D' => 'Kondensasi',
                ],
            ],
            [
                'payload' => 'Bagian tumbuhan yang berfungsi untuk calon tumbuhan baru adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Bunga',
                    'B' => 'Buah',
                    'C' => 'Biji',
                    'D' => 'Daun',
                ],
            ],
            [
                'payload' => 'Siklus perputaran air di bumi disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Siklus nitrogen',
                    'B' => 'Siklus oksigen',
                    'C' => 'Siklus air (siklus hidrologi)',
                    'D' => 'Siklus karbon',
                ],
            ],
            [
                'payload' => 'Perpindahan panas disertai perpindahan partikel zat disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Konduksi',
                    'B' => 'Radiasi',
                    'C' => 'Induksi',
                    'D' => 'Konveksi',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk menyalurkan makanan dari mulut ke lambung adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kerongkongan',
                    'B' => 'Usus besar',
                    'C' => 'Hidung',
                    'D' => 'Paru-paru',
                ],
            ],
            [
                'payload' => 'Alat sederhana yang memudahkan pekerjaan manusia disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mesin uap',
                    'B' => 'Generator',
                    'C' => 'Turbin',
                    'D' => 'Pesawat sederhana',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk melihat adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Ginjal',
                    'B' => 'Jantung',
                    'C' => 'Lambung',
                    'D' => 'Mata',
                ],
            ],
            [
                'payload' => 'Tikus termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karnivora',
                    'B' => 'Omnivora',
                    'C' => 'Insektivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Sumber energi alternatif yang berasal dari angin disebut energi?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Surya',
                    'B' => 'Angin (bayu)',
                    'C' => 'Panas bumi',
                    'D' => 'Air',
                ],
            ],
            [
                'payload' => 'Singa laut termasuk hewan pemakan apa (berdasarkan jenis makanannya)?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Insektivora',
                    'B' => 'Omnivora',
                    'C' => 'Karnivora',
                    'D' => 'Herbivora',
                ],
            ],
            [
                'payload' => 'Proses turunnya air dari awan ke bumi berupa hujan disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Presipitasi',
                    'B' => 'Infiltrasi',
                    'C' => 'Evaporasi',
                    'D' => 'Kondensasi',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk indra peraba adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kulit',
                    'B' => 'Usus halus',
                    'C' => 'Mata',
                    'D' => 'Telinga',
                ],
            ],
            [
                'payload' => 'Organ yang berfungsi untuk pusat sistem saraf adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Otak',
                    'B' => 'Hati',
                    'C' => 'Ginjal',
                    'D' => 'Kerongkongan',
                ],
            ],
            [
                'payload' => 'Contoh sumber protein hewani adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Minyak dan mentega',
                    'B' => 'Bayam dan wortel',
                    'C' => 'Nasi dan kentang',
                    'D' => 'Daging dan telur',
                ],
            ],
        ],
        'IPS' => [
            [
                'payload' => 'Perjanjian yang mengakui kedaulatan RI atas Jawa, Sumatera, dan Madura secara de facto adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Perjanjian Linggarjati',
                    'B' => 'Perjanjian KMB',
                    'C' => 'Perjanjian Roem-Royen',
                    'D' => 'Perjanjian Renville',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Timor Leste adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Dili',
                    'B' => 'Kuala Lumpur',
                    'C' => 'Bangkok',
                    'D' => 'Jakarta',
                ],
            ],
            [
                'payload' => 'Lagu kebangsaan Indonesia adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Indonesia Raya',
                    'B' => 'Halo-Halo Bandung',
                    'C' => 'Garuda Pancasila',
                    'D' => 'Bagimu Negeri',
                ],
            ],
            [
                'payload' => 'Kegiatan membeli barang dari luar negeri disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Impor',
                    'B' => 'Barter',
                    'C' => 'Ekspor',
                    'D' => 'Distribusi',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan rakyat Aceh melawan Belanda adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Cut Nyak Dhien',
                    'B' => 'R.A. Kartini',
                    'C' => 'Sultan Hasanuddin',
                    'D' => 'Ir. Soekarno',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Jambi adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Jambi',
                    'B' => 'Surabaya',
                    'C' => 'Mataram',
                    'D' => 'Yogyakarta',
                ],
            ],
            [
                'payload' => 'Suku bangsa asli Papua yang terkenal adalah suku?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Batak dan Nias',
                    'B' => 'Sasak dan Dayak',
                    'C' => 'Dani dan Asmat',
                    'D' => 'Bugis dan Toraja',
                ],
            ],
            [
                'payload' => 'Kegiatan menjual barang ke luar negeri disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Impor',
                    'B' => 'Barter',
                    'C' => 'Ekspor',
                    'D' => 'Distribusi',
                ],
            ],
            [
                'payload' => 'Organisasi pergerakan nasional pertama di Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Sarekat Islam',
                    'B' => 'Budi Utomo',
                    'C' => 'Indische Partij',
                    'D' => 'Perhimpunan Indonesia',
                ],
            ],
            [
                'payload' => 'Pulau terbesar di Indonesia adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Sulawesi',
                    'B' => 'Sumatera',
                    'C' => 'Kalimantan',
                    'D' => 'Papua',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin Perang Diponegoro melawan Belanda di Jawa adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Sultan Hasanuddin',
                    'B' => 'Pangeran Diponegoro',
                    'C' => 'Jenderal Sudirman',
                    'D' => 'Untung Suropati',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Nusa Tenggara Timur adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kupang',
                    'B' => 'Mamuju',
                    'C' => 'Bandar Lampung',
                    'D' => 'Serang',
                ],
            ],
            [
                'payload' => 'Mata uang resmi Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Peso',
                    'B' => 'Ringgit',
                    'C' => 'Baht',
                    'D' => 'Rupiah',
                ],
            ],
            [
                'payload' => 'Peristiwa penculikan Soekarno-Hatta ke Rengasdengklok terjadi menjelang?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Konferensi Meja Bundar',
                    'B' => 'Proklamasi kemerdekaan',
                    'C' => 'Pemberontakan G30S',
                    'D' => 'Sumpah Pemuda',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Jawa Tengah adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Bengkulu',
                    'B' => 'Banjarmasin',
                    'C' => 'Bandar Lampung',
                    'D' => 'Semarang',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Thailand adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Vientiane',
                    'B' => 'Kuala Lumpur',
                    'C' => 'Jakarta',
                    'D' => 'Bangkok',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan Kesultanan Banten melawan VOC adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Ki Hajar Dewantara',
                    'B' => 'Sultan Ageng Tirtayasa',
                    'C' => 'Untung Suropati',
                    'D' => 'R.A. Kartini',
                ],
            ],
            [
                'payload' => 'Bapak Koperasi Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Soeharto',
                    'B' => 'Ki Hajar Dewantara',
                    'C' => 'Soekarno',
                    'D' => 'Mohammad Hatta',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Jawa Timur adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Surabaya',
                    'B' => 'Padang',
                    'C' => 'Yogyakarta',
                    'D' => 'Banjarmasin',
                ],
            ],
            [
                'payload' => 'Interaksi sosial yang mengarah pada perpecahan disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Disosiatif',
                    'B' => 'Asosiatif',
                    'C' => 'Kolektif',
                    'D' => 'Kooperatif',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan rakyat Batak melawan Belanda adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Pangeran Diponegoro',
                    'B' => 'Sisingamangaraja XII',
                    'C' => 'Jenderal Sudirman',
                    'D' => 'Pattimura',
                ],
            ],
            [
                'payload' => 'Angin yang membawa musim kemarau di Indonesia adalah angin?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Muson barat',
                    'B' => 'Angin darat',
                    'C' => 'Angin laut',
                    'D' => 'Muson timur',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Filipina adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Vientiane',
                    'B' => 'Naypyidaw',
                    'C' => 'Bangkok',
                    'D' => 'Manila',
                ],
            ],
            [
                'payload' => 'Lembaga tertinggi yang mengawasi keuangan negara adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'BPK',
                    'B' => 'MK',
                    'C' => 'DPR',
                    'D' => 'MA',
                ],
            ],
            [
                'payload' => 'Gunung tertinggi di Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Rinjani',
                    'B' => 'Semeru',
                    'C' => 'Kerinci',
                    'D' => 'Puncak Jaya (Jayawijaya)',
                ],
            ],
            [
                'payload' => 'Presiden pertama Republik Indonesia adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'B.J. Habibie',
                    'B' => 'Megawati',
                    'C' => 'Soekarno',
                    'D' => 'Soeharto',
                ],
            ],
            [
                'payload' => 'Norma yang bersumber dari hati nurani manusia disebut norma?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Hukum',
                    'B' => 'Kesopanan',
                    'C' => 'Agama',
                    'D' => 'Kesusilaan',
                ],
            ],
            [
                'payload' => 'Hari lahir Pancasila diperingati setiap tanggal?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '1 Oktober',
                    'B' => '17 Agustus',
                    'C' => '1 Juni',
                    'D' => '28 Oktober',
                ],
            ],
            [
                'payload' => 'Kegiatan menghasilkan barang atau jasa disebut kegiatan?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Produksi',
                    'B' => 'Konsumsi',
                    'C' => 'Investasi',
                    'D' => 'Distribusi',
                ],
            ],
            [
                'payload' => 'Lembaga yudikatif tertinggi di Indonesia adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'BPK',
                    'B' => 'MPR',
                    'C' => 'Mahkamah Agung',
                    'D' => 'DPR',
                ],
            ],
            [
                'payload' => 'Kerajaan Islam pertama di Jawa adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Banten',
                    'B' => 'Cirebon',
                    'C' => 'Mataram',
                    'D' => 'Demak',
                ],
            ],
            [
                'payload' => 'Garis khayal yang membagi bumi menjadi belahan utara dan selatan disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Garis khatulistiwa (ekuator)',
                    'B' => 'Garis lintang tropis',
                    'C' => 'Garis bujur',
                    'D' => 'Garis balik',
                ],
            ],
            [
                'payload' => 'Sumpah Pemuda dicetuskan pada tanggal?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '10 November 1945',
                    'B' => '28 Oktober 1928',
                    'C' => '17 Agustus 1945',
                    'D' => '1 Juni 1945',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena menjadi proklamator dan presiden pertama Indonesia adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Jenderal Sudirman',
                    'B' => 'Sultan Hasanuddin',
                    'C' => 'Ir. Soekarno',
                    'D' => 'Pangeran Diponegoro',
                ],
            ],
            [
                'payload' => 'Sistem tanam paksa yang diterapkan Belanda disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Politik etis',
                    'B' => 'Cultuurstelsel',
                    'C' => 'Devide et impera',
                    'D' => 'Contingenten',
                ],
            ],
            [
                'payload' => 'Kerja paksa tanpa upah pada masa Jepang disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Romusha',
                    'B' => 'Cultuurstelsel',
                    'C' => 'Kerja rodi',
                    'D' => 'Contingenten',
                ],
            ],
            [
                'payload' => 'Angin yang membawa musim hujan di Indonesia adalah angin?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Muson barat',
                    'B' => 'Angin darat',
                    'C' => 'Angin laut',
                    'D' => 'Muson timur',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Singapura adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Naypyidaw',
                    'B' => 'Phnom Penh',
                    'C' => 'Singapura',
                    'D' => 'Kuala Lumpur',
                ],
            ],
            [
                'payload' => 'Pajak yang dikenakan atas penghasilan seseorang disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Bea Cukai',
                    'B' => 'Pajak Bumi dan Bangunan (PBB)',
                    'C' => 'Pajak Penghasilan (PPh)',
                    'D' => 'Pajak Pertambahan Nilai (PPN)',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sumatera Barat adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Padang',
                    'B' => 'Jayapura',
                    'C' => 'Manado',
                    'D' => 'Kupang',
                ],
            ],
            [
                'payload' => 'Lambang negara Indonesia adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Garuda Pancasila',
                    'B' => 'Merah Putih',
                    'C' => 'Elang Jawa',
                    'D' => 'Bhinneka Tunggal Ika',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Kalimantan Barat adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Denpasar',
                    'B' => 'Semarang',
                    'C' => 'Pangkal Pinang',
                    'D' => 'Pontianak',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Bengkulu adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Palu',
                    'B' => 'Palembang',
                    'C' => 'Bengkulu',
                    'D' => 'Pekanbaru',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Nusa Tenggara Barat adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Makassar',
                    'B' => 'Palangka Raya',
                    'C' => 'Mataram',
                    'D' => 'Jambi',
                ],
            ],
            [
                'payload' => 'Indonesia memiliki dua musim, yaitu musim?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Hujan dan kemarau',
                    'B' => 'Kemarau dan salju',
                    'C' => 'Panas dan dingin',
                    'D' => 'Semi dan gugur',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Bangka Belitung adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Pangkal Pinang',
                    'B' => 'Medan',
                    'C' => 'Banda Aceh',
                    'D' => 'Bengkulu',
                ],
            ],
            [
                'payload' => 'Hari Kesaktian Pancasila diperingati setiap tanggal?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => '1 Juni',
                    'B' => '28 Oktober',
                    'C' => '17 Agustus',
                    'D' => '1 Oktober',
                ],
            ],
            [
                'payload' => 'Rumah adat suku Toraja adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Tongkonan',
                    'B' => 'Honai',
                    'C' => 'Rumah Gadang',
                    'D' => 'Joglo',
                ],
            ],
            [
                'payload' => 'Bagian dari kegiatan ekonomi yang menyalurkan hasil produksi ke konsumen melalui pedagang disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Investasi',
                    'B' => 'Produksi',
                    'C' => 'Konsumsi',
                    'D' => 'Distribusi',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sulawesi Barat adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bandung',
                    'B' => 'Mamuju',
                    'C' => 'Padang',
                    'D' => 'Bandar Lampung',
                ],
            ],
            [
                'payload' => 'Lembaga yang bertugas membuat undang-undang adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'BPK',
                    'B' => 'MK',
                    'C' => 'MA',
                    'D' => 'DPR',
                ],
            ],
            [
                'payload' => 'Pajak yang dikenakan atas kepemilikan tanah dan bangunan disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Pajak Penghasilan (PPh)',
                    'B' => 'Pajak Pertambahan Nilai (PPN)',
                    'C' => 'Bea Cukai',
                    'D' => 'Pajak Bumi dan Bangunan (PBB)',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Maluku adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Ambon',
                    'B' => 'Pontianak',
                    'C' => 'Banjarmasin',
                    'D' => 'Semarang',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Malaysia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Manila',
                    'B' => 'Kuala Lumpur',
                    'C' => 'Bandar Seri Begawan',
                    'D' => 'Bangkok',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena menjadi panglima besar TNI pertama dan memimpin perang gerilya adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Jenderal Sudirman',
                    'B' => 'Sultan Ageng Tirtayasa',
                    'C' => 'Pangeran Diponegoro',
                    'D' => 'Sultan Hasanuddin',
                ],
            ],
            [
                'payload' => 'Bhinneka Tunggal Ika memiliki arti?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Satu nusa satu bangsa',
                    'B' => 'Bersatu kita teguh',
                    'C' => 'Merdeka atau mati',
                    'D' => 'Berbeda-beda tetapi tetap satu jua',
                ],
            ],
            [
                'payload' => 'Konferensi Meja Bundar dilaksanakan di kota?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Den Haag, Belanda',
                    'C' => 'Jakarta',
                    'D' => 'Linggarjati',
                ],
            ],
            [
                'payload' => 'Lembaga yang berwenang menguji undang-undang terhadap UUD adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'DPR',
                    'B' => 'MPR',
                    'C' => 'Mahkamah Agung',
                    'D' => 'Mahkamah Konstitusi',
                ],
            ],
            [
                'payload' => 'Perjanjian yang mengakui kedaulatan RI atas Jawa, Madura, dan Sumatera adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Perjanjian Renville',
                    'B' => 'Perjanjian Linggarjati',
                    'C' => 'Perjanjian KMB',
                    'D' => 'Perjanjian Roem-Royen',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Kamboja adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Bangkok',
                    'B' => 'Hanoi',
                    'C' => 'Kuala Lumpur',
                    'D' => 'Phnom Penh',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Brunei Darussalam adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Naypyidaw',
                    'B' => 'Jakarta',
                    'C' => 'Bandar Seri Begawan',
                    'D' => 'Hanoi',
                ],
            ],
            [
                'payload' => 'Hari Pendidikan Nasional diperingati setiap tanggal?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '1 Juni',
                    'B' => '17 Agustus',
                    'C' => '2 Mei',
                    'D' => '10 November',
                ],
            ],
            [
                'payload' => 'Masa penjajahan Belanda di Indonesia berlangsung sekitar?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '200 tahun',
                    'B' => '350 tahun',
                    'C' => '100 tahun',
                    'D' => '3,5 tahun',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena menjadi proklamator dan wakil presiden pertama Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'R.A. Kartini',
                    'B' => 'Mohammad Hatta',
                    'C' => 'Ir. Soekarno',
                    'D' => 'Cut Nyak Dhien',
                ],
            ],
            [
                'payload' => 'Bapak Pendidikan Nasional Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Douwes Dekker',
                    'B' => 'Wahidin Sudirohusodo',
                    'C' => 'Cipto Mangunkusumo',
                    'D' => 'Ki Hajar Dewantara',
                ],
            ],
            [
                'payload' => 'Samudra terluas di dunia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Samudra Arktik',
                    'B' => 'Samudra Pasifik',
                    'C' => 'Samudra Atlantik',
                    'D' => 'Samudra Hindia',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sulawesi Selatan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Makassar',
                    'B' => 'Semarang',
                    'C' => 'Kendari',
                    'D' => 'Manado',
                ],
            ],
            [
                'payload' => 'Kepala pemerintahan di tingkat kota disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Camat',
                    'B' => 'Wali kota',
                    'C' => 'Gubernur',
                    'D' => 'Bupati',
                ],
            ],
            [
                'payload' => 'Benua terkecil di dunia adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Australia',
                    'B' => 'Eropa',
                    'C' => 'Afrika',
                    'D' => 'Antartika',
                ],
            ],
            [
                'payload' => 'Masa penjajahan Jepang di Indonesia berlangsung sekitar?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '50 tahun',
                    'B' => '100 tahun',
                    'C' => '3,5 tahun',
                    'D' => '350 tahun',
                ],
            ],
            [
                'payload' => 'Perbedaan waktu di Indonesia terbagi menjadi berapa zona waktu?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => '2 zona',
                    'B' => '3 zona (WIB, WITA, WIT)',
                    'C' => '5 zona',
                    'D' => '4 zona',
                ],
            ],
            [
                'payload' => 'Kepala pemerintahan di tingkat kabupaten disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Bupati',
                    'B' => 'Wali kota',
                    'C' => 'Camat',
                    'D' => 'Gubernur',
                ],
            ],
            [
                'payload' => 'Kerja paksa membangun jalan pada masa Belanda (Jalan Anyer-Panarukan) disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tanam paksa',
                    'B' => 'Cultuurstelsel',
                    'C' => 'Kerja rodi',
                    'D' => 'Romusha',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Papua adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Gorontalo',
                    'B' => 'Bandar Lampung',
                    'C' => 'Samarinda',
                    'D' => 'Jayapura',
                ],
            ],
            [
                'payload' => 'Indonesia terletak di antara dua benua, yaitu?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Eropa dan Asia',
                    'B' => 'Afrika dan Australia',
                    'C' => 'Asia dan Australia',
                    'D' => 'Asia dan Afrika',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan rakyat Aceh setelah suaminya gugur adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Cut Nyak Dhien',
                    'B' => 'Cut Meutia',
                    'C' => 'Sultan Ageng Tirtayasa',
                    'D' => 'Dewi Sartika',
                ],
            ],
            [
                'payload' => 'Selat yang memisahkan Pulau Sumatera dan Semenanjung Malaysia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Selat Lombok',
                    'B' => 'Selat Malaka',
                    'C' => 'Selat Sunda',
                    'D' => 'Selat Bali',
                ],
            ],
            [
                'payload' => 'Norma yang bersumber dari kebiasaan masyarakat disebut norma?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kesopanan',
                    'B' => 'Agama',
                    'C' => 'Hukum',
                    'D' => 'Kesusilaan',
                ],
            ],
            [
                'payload' => 'Politik balas budi Belanda kepada rakyat Indonesia disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Politik etis',
                    'B' => 'Devide et impera',
                    'C' => 'Cultuurstelsel',
                    'D' => 'Romusha',
                ],
            ],
            [
                'payload' => 'Proklamasi kemerdekaan Indonesia dibacakan pada tanggal?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '18 Agustus 1945',
                    'B' => '16 Agustus 1945',
                    'C' => '17 Agustus 1945',
                    'D' => '20 Mei 1945',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sulawesi Tenggara adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Pontianak',
                    'B' => 'Manado',
                    'C' => 'Denpasar',
                    'D' => 'Kendari',
                ],
            ],
            [
                'payload' => 'VOC dibubarkan pada tahun?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '1945',
                    'B' => '1602',
                    'C' => '1799',
                    'D' => '1942',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Riau adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Medan',
                    'B' => 'Banjarmasin',
                    'C' => 'Pekanbaru',
                    'D' => 'Pontianak',
                ],
            ],
            [
                'payload' => 'Sungai terpanjang di dunia adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Sungai Nil',
                    'B' => 'Sungai Mississippi',
                    'C' => 'Sungai Amazon',
                    'D' => 'Sungai Yangtze',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan rakyat Maluku melawan Belanda adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Pattimura',
                    'B' => 'Dewi Sartika',
                    'C' => 'Sisingamangaraja XII',
                    'D' => 'Mohammad Hatta',
                ],
            ],
            [
                'payload' => 'Iklim yang dimiliki Indonesia karena terletak di garis khatulistiwa adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Iklim tropis',
                    'B' => 'Iklim subtropis',
                    'C' => 'Iklim gurun',
                    'D' => 'Iklim kutub',
                ],
            ],
            [
                'payload' => 'Selat yang memisahkan Pulau Sumatera dan Pulau Jawa adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Selat Karimata',
                    'B' => 'Selat Malaka',
                    'C' => 'Selat Sunda',
                    'D' => 'Selat Bali',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sulawesi Tengah adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Jambi',
                    'B' => 'Palu',
                    'C' => 'Gorontalo',
                    'D' => 'Banda Aceh',
                ],
            ],
            [
                'payload' => 'VOC adalah singkatan dari?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Verenigde Oost Indonesia Company',
                    'B' => 'Verenigde Overzee Compagnie',
                    'C' => 'Vereenigde Oost Company',
                    'D' => 'Vereenigde Oostindische Compagnie',
                ],
            ],
            [
                'payload' => 'Benua terluas di dunia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Afrika',
                    'B' => 'Asia',
                    'C' => 'Eropa',
                    'D' => 'Amerika',
                ],
            ],
            [
                'payload' => 'Gunung tertinggi di dunia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kilimanjaro',
                    'B' => 'Jayawijaya',
                    'C' => 'Fuji',
                    'D' => 'Everest',
                ],
            ],
            [
                'payload' => 'Rumah adat Sumatera Barat adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Honai',
                    'B' => 'Rumah Gadang',
                    'C' => 'Joglo',
                    'D' => 'Tongkonan',
                ],
            ],
            [
                'payload' => 'Tari tradisional dari Aceh yang terkenal adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tari Kecak',
                    'B' => 'Tari Piring',
                    'C' => 'Tari Saman',
                    'D' => 'Tari Jaipong',
                ],
            ],
            [
                'payload' => 'Bendera negara Indonesia berwarna?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Merah putih biru',
                    'B' => 'Putih biru',
                    'C' => 'Merah kuning hijau',
                    'D' => 'Merah putih',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan rakyat Makassar melawan VOC adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Ir. Soekarno',
                    'B' => 'Sultan Hasanuddin',
                    'C' => 'Jenderal Sudirman',
                    'D' => 'Sisingamangaraja XII',
                ],
            ],
            [
                'payload' => 'Kerajaan Hindu tertua di Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mataram Kuno',
                    'B' => 'Majapahit',
                    'C' => 'Sriwijaya',
                    'D' => 'Kutai',
                ],
            ],
            [
                'payload' => 'Semboyan negara Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Garuda Pancasila',
                    'B' => 'Bhinneka Tunggal Ika',
                    'C' => 'Rawe-rawe rantas',
                    'D' => 'Merdeka atau Mati',
                ],
            ],
            [
                'payload' => 'Indonesia terletak di antara dua samudra, yaitu?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Arktik dan Hindia',
                    'B' => 'Pasifik dan Hindia',
                    'C' => 'Hindia dan Atlantik',
                    'D' => 'Pasifik dan Atlantik',
                ],
            ],
            [
                'payload' => 'Norma yang bersumber dari ajaran agama disebut norma?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kesusilaan',
                    'B' => 'Agama',
                    'C' => 'Kesopanan',
                    'D' => 'Hukum',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Lampung adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Palangka Raya',
                    'B' => 'Bandar Lampung',
                    'C' => 'Mamuju',
                    'D' => 'Gorontalo',
                ],
            ],
            [
                'payload' => 'Politik devide et impera oleh Belanda berarti?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Politik adu domba',
                    'B' => 'Politik tanam paksa',
                    'C' => 'Politik pintu terbuka',
                    'D' => 'Politik balas budi',
                ],
            ],
            [
                'payload' => 'Kepadatan penduduk tertinggi di Indonesia terdapat di Pulau?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Kalimantan',
                    'B' => 'Sumatera',
                    'C' => 'Jawa',
                    'D' => 'Papua',
                ],
            ],
            [
                'payload' => 'Kepala pemerintahan di tingkat provinsi disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Camat',
                    'B' => 'Gubernur',
                    'C' => 'Bupati',
                    'D' => 'Wali kota',
                ],
            ],
            [
                'payload' => 'Naskah proklamasi diketik oleh?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Hatta',
                    'B' => 'Sayuti Melik',
                    'C' => 'Ahmad Soebardjo',
                    'D' => 'Soekarno',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin Perang Padri di Sumatera Barat adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Tuanku Imam Bonjol',
                    'B' => 'Sultan Ageng Tirtayasa',
                    'C' => 'Ki Hajar Dewantara',
                    'D' => 'Pangeran Diponegoro',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Hanoi',
                    'B' => 'Jakarta',
                    'C' => 'Bandar Seri Begawan',
                    'D' => 'Naypyidaw',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Kalimantan Selatan adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Padang',
                    'B' => 'Banjarmasin',
                    'C' => 'Banda Aceh',
                    'D' => 'Serang',
                ],
            ],
            [
                'payload' => 'Aturan tidak tertulis yang mengatur perilaku masyarakat disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Konstitusi',
                    'B' => 'Undang-undang',
                    'C' => 'Norma',
                    'D' => 'Hukum',
                ],
            ],
            [
                'payload' => 'Alat musik tradisional dari Jawa Barat adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kolintang',
                    'B' => 'Sasando',
                    'C' => 'Gamelan',
                    'D' => 'Angklung',
                ],
            ],
            [
                'payload' => 'Suku bangsa terbesar di Indonesia adalah suku?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bugis',
                    'B' => 'Jawa',
                    'C' => 'Sunda',
                    'D' => 'Batak',
                ],
            ],
            [
                'payload' => 'Lembaga keuangan yang menghimpun dan menyalurkan dana masyarakat disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Pasar',
                    'B' => 'Koperasi',
                    'C' => 'Bursa efek',
                    'D' => 'Bank',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Kalimantan Timur adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Bandar Lampung',
                    'B' => 'Pekanbaru',
                    'C' => 'Samarinda',
                    'D' => 'Gorontalo',
                ],
            ],
            [
                'payload' => 'Kegiatan menyimpan hasil produksi sebelum didistribusikan disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Distribusi',
                    'B' => 'Konsumsi',
                    'C' => 'Penyimpanan',
                    'D' => 'Produksi',
                ],
            ],
            [
                'payload' => 'Proklamasi kemerdekaan Indonesia dibacakan oleh?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Soekarno dan Hatta',
                    'B' => 'Sudirman',
                    'C' => 'Soeharto',
                    'D' => 'Sutan Sjahrir',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena mendirikan Taman Siswa dan menjadi Bapak Pendidikan Nasional adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Jenderal Sudirman',
                    'B' => 'Ki Hajar Dewantara',
                    'C' => 'Untung Suropati',
                    'D' => 'Cut Nyak Dhien',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sumatera Utara adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Banjarmasin',
                    'B' => 'Mamuju',
                    'C' => 'Bandar Lampung',
                    'D' => 'Medan',
                ],
            ],
            [
                'payload' => 'Ibu kota Indonesia yang baru (IKN) terletak di provinsi?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kalimantan Tengah',
                    'B' => 'Kalimantan Selatan',
                    'C' => 'Kalimantan Barat',
                    'D' => 'Kalimantan Timur',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sulawesi Utara adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Tanjung Pinang',
                    'B' => 'Ambon',
                    'C' => 'Manado',
                    'D' => 'Kendari',
                ],
            ],
            [
                'payload' => 'Kegiatan jual beli barang antarnegara disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Perdagangan lokal',
                    'B' => 'Barter',
                    'C' => 'Perdagangan internasional',
                    'D' => 'Konsumsi',
                ],
            ],
            [
                'payload' => 'Rumah adat Jawa Tengah adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Joglo',
                    'B' => 'Rumah Gadang',
                    'C' => 'Honai',
                    'D' => 'Tongkonan',
                ],
            ],
            [
                'payload' => 'Interaksi sosial yang mengarah pada persatuan disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Individual',
                    'B' => 'Konfliktual',
                    'C' => 'Asosiatif',
                    'D' => 'Disosiatif',
                ],
            ],
            [
                'payload' => 'Dasar negara Indonesia adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'GBHN',
                    'B' => 'Tap MPR',
                    'C' => 'Pancasila',
                    'D' => 'UUD 1945',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Gorontalo adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bandung',
                    'B' => 'Gorontalo',
                    'C' => 'Surabaya',
                    'D' => 'Mataram',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Kalimantan Tengah adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Palangka Raya',
                    'B' => 'Denpasar',
                    'C' => 'Kendari',
                    'D' => 'Jayapura',
                ],
            ],
            [
                'payload' => 'Peninggalan sejarah berupa candi Hindu terbesar di Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Candi Mendut',
                    'B' => 'Candi Prambanan',
                    'C' => 'Candi Sewu',
                    'D' => 'Candi Borobudur',
                ],
            ],
            [
                'payload' => 'Tari tradisional dari Bali yang terkenal adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Tari Jaipong',
                    'B' => 'Tari Kecak',
                    'C' => 'Tari Saman',
                    'D' => 'Tari Piring',
                ],
            ],
            [
                'payload' => 'Rumah adat Papua adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Rumah Gadang',
                    'B' => 'Honai',
                    'C' => 'Tongkonan',
                    'D' => 'Joglo',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memperjuangkan emansipasi wanita di Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Tuanku Imam Bonjol',
                    'B' => 'R.A. Kartini',
                    'C' => 'Sisingamangaraja XII',
                    'D' => 'Sultan Hasanuddin',
                ],
            ],
            [
                'payload' => 'Kegiatan menggunakan atau menghabiskan nilai guna barang disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Distribusi',
                    'B' => 'Produksi',
                    'C' => 'Konsumsi',
                    'D' => 'Investasi',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Myanmar adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bandar Seri Begawan',
                    'B' => 'Naypyidaw',
                    'C' => 'Vientiane',
                    'D' => 'Singapura',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Kepulauan Riau adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Tanjung Pinang',
                    'B' => 'Palangka Raya',
                    'C' => 'Bandar Lampung',
                    'D' => 'Banda Aceh',
                ],
            ],
            [
                'payload' => 'Kerajaan maritim terbesar di Nusantara adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Majapahit',
                    'B' => 'Sriwijaya',
                    'C' => 'Demak',
                    'D' => 'Kutai',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Vietnam adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Jakarta',
                    'B' => 'Bangkok',
                    'C' => 'Hanoi',
                    'D' => 'Kuala Lumpur',
                ],
            ],
            [
                'payload' => 'Alat musik tradisional dari Nusa Tenggara Timur adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Sasando',
                    'B' => 'Angklung',
                    'C' => 'Kolintang',
                    'D' => 'Gamelan',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Bali adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Denpasar',
                    'B' => 'Jayapura',
                    'C' => 'Surabaya',
                    'D' => 'Medan',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Sumatera Selatan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Palembang',
                    'B' => 'Bandung',
                    'C' => 'Denpasar',
                    'D' => 'Palu',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Yogyakarta adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Bengkulu',
                    'B' => 'Gorontalo',
                    'C' => 'Samarinda',
                    'D' => 'Yogyakarta',
                ],
            ],
            [
                'payload' => 'Badan usaha yang berlandaskan asas kekeluargaan adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Koperasi',
                    'B' => 'Firma',
                    'C' => 'CV',
                    'D' => 'PT',
                ],
            ],
            [
                'payload' => 'Pencipta lagu Indonesia Raya adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'C. Simanjuntak',
                    'B' => 'Kusbini',
                    'C' => 'Ismail Marzuki',
                    'D' => 'W.R. Supratman',
                ],
            ],
            [
                'payload' => 'Wakil presiden pertama Republik Indonesia adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Sukarni',
                    'B' => 'Sutan Sjahrir',
                    'C' => 'Ahmad Soebardjo',
                    'D' => 'Mohammad Hatta',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Banten adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Serang',
                    'B' => 'Mataram',
                    'C' => 'Ambon',
                    'D' => 'Denpasar',
                ],
            ],
            [
                'payload' => 'Ibu kota negara Laos adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Singapura',
                    'B' => 'Bangkok',
                    'C' => 'Vientiane',
                    'D' => 'Jakarta',
                ],
            ],
            [
                'payload' => 'Tempat bertemunya penjual dan pembeli disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Koperasi',
                    'B' => 'Pasar',
                    'C' => 'Bank',
                    'D' => 'Gudang',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena mendirikan sekolah untuk kaum perempuan di Jawa Barat adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Untung Suropati',
                    'B' => 'Cut Nyak Dhien',
                    'C' => 'Dewi Sartika',
                    'D' => 'Ki Hajar Dewantara',
                ],
            ],
            [
                'payload' => 'Tokoh yang dikenal karena memimpin perlawanan terhadap VOC di Jawa Timur adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'R.A. Kartini',
                    'B' => 'Untung Suropati',
                    'C' => 'Pattimura',
                    'D' => 'Pangeran Diponegoro',
                ],
            ],
            [
                'payload' => 'Peninggalan sejarah berupa candi Buddha terbesar di Indonesia adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Candi Mendut',
                    'B' => 'Candi Borobudur',
                    'C' => 'Candi Kalasan',
                    'D' => 'Candi Prambanan',
                ],
            ],
            [
                'payload' => 'Budi Utomo didirikan pada tahun?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => '1908',
                    'B' => '1927',
                    'C' => '1945',
                    'D' => '1912',
                ],
            ],
            [
                'payload' => 'Kegiatan menyalurkan barang dari produsen ke konsumen disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Distribusi',
                    'B' => 'Konsumsi',
                    'C' => 'Investasi',
                    'D' => 'Produksi',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Jawa Barat adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Yogyakarta',
                    'B' => 'Bandung',
                    'C' => 'Kupang',
                    'D' => 'Jayapura',
                ],
            ],
            [
                'payload' => 'Ibu kota provinsi Aceh adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Mamuju',
                    'B' => 'Gorontalo',
                    'C' => 'Mataram',
                    'D' => 'Banda Aceh',
                ],
            ],
        ],
        'Bahasa Indonesia' => [
            [
                'payload' => 'Sinonim dari kata \'hancur\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'gentar',
                    'B' => 'licik',
                    'C' => 'tulus',
                    'D' => 'musnah',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'miskin\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'senang',
                    'B' => 'papa',
                    'C' => 'raksasa',
                    'D' => 'pintar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'atas\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'bawah',
                    'B' => 'takut',
                    'C' => 'benci',
                    'D' => 'bohong',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan orang adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kapan',
                    'B' => 'Apa',
                    'C' => 'Di mana',
                    'D' => 'Siapa',
                ],
            ],
            [
                'payload' => 'Paragraf yang kalimat utamanya berada di akhir disebut paragraf?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Deduktif',
                    'B' => 'Induktif',
                    'C' => 'Campuran',
                    'D' => 'Deskriptif',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'terbuka\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'mundur',
                    'B' => 'baru',
                    'C' => 'tertutup',
                    'D' => 'sempit',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'aktifitas\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Apotek',
                    'B' => 'Nasihat',
                    'C' => 'Imbau',
                    'D' => 'Aktivitas',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kaya\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'raksasa',
                    'C' => 'makmur',
                    'D' => 'gagah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'suka\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'bawah',
                    'B' => 'tertutup',
                    'C' => 'miskin',
                    'D' => 'benci',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bagus\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'musnah',
                    'B' => 'menolong',
                    'C' => 'elok',
                    'D' => 'gagah',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cantik\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'dungu',
                    'B' => 'elok',
                    'C' => 'perkasa',
                    'D' => 'permai',
                ],
            ],
            [
                'payload' => 'Penulis novel \'Bumi Manusia\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Andrea Hirata',
                    'B' => 'Pramoedya Ananta Toer',
                    'C' => 'Buya Hamka',
                    'D' => 'Chairil Anwar',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'agung\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'mulia',
                    'B' => 'musnah',
                    'C' => 'duka',
                    'D' => 'karib',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cantik\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'tutur',
                    'B' => 'jelita',
                    'C' => 'jelek',
                    'D' => 'sukar',
                ],
            ],
            [
                'payload' => 'Bentuk karya sastra yang dipentaskan dengan dialog dan gerak disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Prosa',
                    'B' => 'Drama',
                    'C' => 'Pantun',
                    'D' => 'Puisi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'rapi\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'akhir',
                    'B' => 'sulit',
                    'C' => 'berantakan',
                    'D' => 'kurus',
                ],
            ],
            [
                'payload' => 'Karangan yang menggambarkan suatu objek secara rinci disebut karangan?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Eksposisi',
                    'B' => 'Argumentasi',
                    'C' => 'Deskripsi',
                    'D' => 'Narasi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'menang\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'tertutup',
                    'B' => 'kalah',
                    'C' => 'sedih',
                    'D' => 'kering',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'gembira\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'sedih',
                    'B' => 'lembut',
                    'C' => 'takut',
                    'D' => 'rugi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'depan\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'kurus',
                    'B' => 'mati',
                    'C' => 'takut',
                    'D' => 'belakang',
                ],
            ],
            [
                'payload' => 'Kalimat yang menyatakan berita disebut kalimat?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Imperatif',
                    'B' => 'Interogatif',
                    'C' => 'Eksklamatif',
                    'D' => 'Deklaratif',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'analisa\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Imbau',
                    'B' => 'Izin',
                    'C' => 'Zaman',
                    'D' => 'Analisis',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'tinggi\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'rendah',
                    'B' => 'berantakan',
                    'C' => 'bohong',
                    'D' => 'lambat',
                ],
            ],
            [
                'payload' => 'Kalimat yang berisi perintah disebut kalimat?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Deklaratif',
                    'B' => 'Interogatif',
                    'C' => 'Naratif',
                    'D' => 'Imperatif',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'kuat\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'muda',
                    'B' => 'ekspor',
                    'C' => 'buruk',
                    'D' => 'lemah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'jujur\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'bohong',
                    'C' => 'takut',
                    'D' => 'lemah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'berat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'pasif',
                    'B' => 'gelap',
                    'C' => 'ringan',
                    'D' => 'buruk',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'luas\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'akhir',
                    'B' => 'ekspor',
                    'C' => 'sempit',
                    'D' => 'buruk',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'hidup\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'malas',
                    'B' => 'lemah',
                    'C' => 'mati',
                    'D' => 'muda',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan sifat atau keadaan disebut kata?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Numeralia',
                    'B' => 'Verba',
                    'C' => 'Adjektiva (kata sifat)',
                    'D' => 'Nomina',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan sebab adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Apa',
                    'B' => 'Kapan',
                    'C' => 'Di mana',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'jujur\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'gagah',
                    'B' => 'permai',
                    'C' => 'karib',
                    'D' => 'tulus',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'besar\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'menolong',
                    'B' => 'raksasa',
                    'C' => 'tutur',
                    'D' => 'kekal',
                ],
            ],
            [
                'payload' => 'Jumlah baris dalam satu bait pantun adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => '8 baris',
                    'B' => '2 baris',
                    'C' => '4 baris',
                    'D' => '6 baris',
                ],
            ],
            [
                'payload' => 'Puisi lama yang bersajak a-a-a-a dan berisi cerita disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Gurindam',
                    'B' => 'Talibun',
                    'C' => 'Pantun',
                    'D' => 'Syair',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung satu subjek dan satu predikat disebut kalimat?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Interogatif',
                    'B' => 'Majemuk',
                    'C' => 'Kompleks',
                    'D' => 'Tunggal',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan cara adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kapan',
                    'B' => 'Bagaimana',
                    'C' => 'Siapa',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'sekedar\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Praktik',
                    'B' => 'Risiko',
                    'C' => 'Nomor',
                    'D' => 'Sekadar',
                ],
            ],
            [
                'payload' => 'Teks yang menceritakan suatu peristiwa secara kronologis disebut teks?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Eksposisi',
                    'B' => 'Deskripsi',
                    'C' => 'Narasi',
                    'D' => 'Argumentasi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'cepat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'sedikit',
                    'B' => 'sempit',
                    'C' => 'lambat',
                    'D' => 'belakang',
                ],
            ],
            [
                'payload' => 'Kata yang mengalami proses pengulangan disebut kata?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Ulang',
                    'B' => 'Dasar',
                    'C' => 'Turunan',
                    'D' => 'Majemuk',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'hakekat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Aktivitas',
                    'B' => 'Kualitas',
                    'C' => 'Hakikat',
                    'D' => 'Nomor',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bicara\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'sukar',
                    'B' => 'tutur',
                    'C' => 'cermat',
                    'D' => 'enggan',
                ],
            ],
            [
                'payload' => 'Penulis \'Tenggelamnya Kapal Van Der Wijck\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Buya Hamka',
                    'B' => 'Andrea Hirata',
                    'C' => 'Marah Rusli',
                    'D' => 'Pramoedya Ananta Toer',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'dekat\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'karib',
                    'B' => 'permai',
                    'C' => 'perkasa',
                    'D' => 'merdeka',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'abadi\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'dusta',
                    'B' => 'papa',
                    'C' => 'kekal',
                    'D' => 'dungu',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'nasehat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Objek',
                    'B' => 'Teknik',
                    'C' => 'Nasihat',
                    'D' => 'Aktivitas',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'lama\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'rugi',
                    'B' => 'baru',
                    'C' => 'ekspor',
                    'D' => 'gelap',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'sulit\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'elok',
                    'B' => 'gampang',
                    'C' => 'sukar',
                    'D' => 'raksasa',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'baru\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'anyar',
                    'B' => 'duka',
                    'C' => 'dungu',
                    'D' => 'kekal',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'pandai\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'duka',
                    'B' => 'gentar',
                    'C' => 'elok',
                    'D' => 'pintar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'maju\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'mundur',
                    'B' => 'sedih',
                    'C' => 'bohong',
                    'D' => 'kurus',
                ],
            ],
            [
                'payload' => 'Kalimat yang berisi pertanyaan disebut kalimat?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Deklaratif',
                    'B' => 'Imperatif',
                    'C' => 'Interogatif',
                    'D' => 'Eksklamatif',
                ],
            ],
            [
                'payload' => 'Majas yang memberikan sifat manusia kepada benda mati disebut majas?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Personifikasi',
                    'B' => 'Metafora',
                    'C' => 'Hiperbola',
                    'D' => 'Simile',
                ],
            ],
            [
                'payload' => 'Puisi lama yang terdiri dari dua baris berisi nasihat disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Gurindam',
                    'B' => 'Syair',
                    'C' => 'Mantra',
                    'D' => 'Pantun',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'keras\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'lembut',
                    'B' => 'buruk',
                    'C' => 'malam',
                    'D' => 'mati',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'untung\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'dingin',
                    'B' => 'rugi',
                    'C' => 'bawah',
                    'D' => 'akhir',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'karir\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Izin',
                    'B' => 'Objek',
                    'C' => 'Zaman',
                    'D' => 'Karier',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'panjang\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'bohong',
                    'B' => 'pendek',
                    'C' => 'mundur',
                    'D' => 'kalah',
                ],
            ],
            [
                'payload' => 'Majas yang melebih-lebihkan sesuatu disebut majas?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Hiperbola',
                    'B' => 'Metafora',
                    'C' => 'Litotes',
                    'D' => 'Personifikasi',
                ],
            ],
            [
                'payload' => 'Paragraf yang kalimat utamanya berada di awal disebut paragraf?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Deduktif',
                    'B' => 'Naratif',
                    'C' => 'Induktif',
                    'D' => 'Campuran',
                ],
            ],
            [
                'payload' => 'Satuan bahasa terkecil yang memiliki makna disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Kata',
                    'B' => 'Frasa',
                    'C' => 'Fonem',
                    'D' => 'Morfem',
                ],
            ],
            [
                'payload' => 'Pengarang puisi \'Aku\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Taufiq Ismail',
                    'B' => 'Chairil Anwar',
                    'C' => 'W.S. Rendra',
                    'D' => 'Sapardi Djoko Damono',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'malas\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'raksasa',
                    'B' => 'enggan',
                    'C' => 'gagah',
                    'D' => 'jelita',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'takut\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'elok',
                    'B' => 'gentar',
                    'C' => 'dungu',
                    'D' => 'tutur',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'bersih\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'akhir',
                    'B' => 'baru',
                    'C' => 'benci',
                    'D' => 'kotor',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'kaya\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'bohong',
                    'B' => 'miskin',
                    'C' => 'lembut',
                    'D' => 'keluar',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'subyek\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Subjek',
                    'B' => 'Nomor',
                    'C' => 'Risiko',
                    'D' => 'Analisis',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'resiko\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Analisis',
                    'B' => 'Risiko',
                    'C' => 'Hakikat',
                    'D' => 'Zaman',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kecil\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'menolong',
                    'B' => 'murka',
                    'C' => 'musnah',
                    'D' => 'mungil',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'kwalitas\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Praktik',
                    'B' => 'Subjek',
                    'C' => 'Imbau',
                    'D' => 'Kualitas',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'mudah\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'sulit',
                    'B' => 'benci',
                    'C' => 'sempit',
                    'D' => 'bohong',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'ijin\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Risiko',
                    'B' => 'Izin',
                    'C' => 'Teknik',
                    'D' => 'Karier',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'gembira\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'masyhur',
                    'B' => 'jelita',
                    'C' => 'riang',
                    'D' => 'mulia',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'melihat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'masyhur',
                    'B' => 'tulus',
                    'C' => 'menatap',
                    'D' => 'musnah',
                ],
            ],
            [
                'payload' => 'Cerita fiksi pendek yang selesai dibaca dalam sekali duduk disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Novel',
                    'B' => 'Cerpen',
                    'C' => 'Drama',
                    'D' => 'Roman',
                ],
            ],
            [
                'payload' => 'Teks yang memaparkan informasi secara jelas dan padat disebut teks?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Deskripsi',
                    'B' => 'Narasi',
                    'C' => 'Eksposisi',
                    'D' => 'Argumentasi',
                ],
            ],
            [
                'payload' => 'Imbuhan yang diletakkan di akhir kata disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Sisipan',
                    'B' => 'Konfiks',
                    'C' => 'Awalan',
                    'D' => 'Akhiran (sufiks)',
                ],
            ],
            [
                'payload' => 'Gabungan dua kata atau lebih yang membentuk makna baru disebut kata?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Ulang',
                    'B' => 'Berimbuhan',
                    'C' => 'Dasar',
                    'D' => 'Majemuk',
                ],
            ],
            [
                'payload' => 'Bagian akhir cerita yang berisi penyelesaian masalah disebut?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Resolusi',
                    'B' => 'Orientasi',
                    'C' => 'Komplikasi',
                    'D' => 'Koda',
                ],
            ],
            [
                'payload' => 'Gaya bahasa yang membandingkan dua hal secara langsung disebut majas?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Hiperbola',
                    'B' => 'Personifikasi',
                    'C' => 'Metafora',
                    'D' => 'Ironi',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'tehnik\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Paham',
                    'B' => 'Zaman',
                    'C' => 'Teknik',
                    'D' => 'Subjek',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'terang\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'gelap',
                    'B' => 'berantakan',
                    'C' => 'sulit',
                    'D' => 'dinamis',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'baik\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'mundur',
                    'B' => 'buruk',
                    'C' => 'lambat',
                    'D' => 'muda',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'nomer\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Nomor',
                    'B' => 'Analisis',
                    'C' => 'Hakikat',
                    'D' => 'Aktivitas',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'indah\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'permai',
                    'B' => 'raksasa',
                    'C' => 'sukar',
                    'D' => 'tekun',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'praktek\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Apotek',
                    'B' => 'Ekstrakurikuler',
                    'C' => 'Analisis',
                    'D' => 'Praktik',
                ],
            ],
            [
                'payload' => 'Bagian awal cerita yang memperkenalkan tokoh dan latar disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Resolusi',
                    'B' => 'Orientasi',
                    'C' => 'Komplikasi',
                    'D' => 'Koda',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'marah\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'murka',
                    'C' => 'dusta',
                    'D' => 'duka',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'sedih\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'perkasa',
                    'C' => 'gagah',
                    'D' => 'duka',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung makna sebenarnya disebut kalimat?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Kiasan',
                    'B' => 'Denotasi',
                    'C' => 'Majas',
                    'D' => 'Konotasi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'besar\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'rugi',
                    'B' => 'kecil',
                    'C' => 'pendek',
                    'D' => 'keluar',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan suatu tindakan atau perbuatan disebut kata?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Verba (kata kerja)',
                    'B' => 'Numeralia',
                    'C' => 'Nomina',
                    'D' => 'Adjektiva',
                ],
            ],
            [
                'payload' => 'Teks yang bertujuan meyakinkan pembaca dengan argumen disebut teks?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Argumentasi',
                    'B' => 'Deskripsi',
                    'C' => 'Eksposisi',
                    'D' => 'Narasi',
                ],
            ],
            [
                'payload' => 'Kalimat yang terdiri dari dua klausa atau lebih disebut kalimat?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Deklaratif',
                    'B' => 'Simpleks',
                    'C' => 'Majemuk',
                    'D' => 'Tunggal',
                ],
            ],
            [
                'payload' => 'Kata yang belum mendapat imbuhan apapun disebut kata?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Berimbuhan',
                    'B' => 'Ulang',
                    'C' => 'Majemuk',
                    'D' => 'Dasar',
                ],
            ],
            [
                'payload' => 'Imbuhan yang diletakkan di awal kata disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Akhiran',
                    'B' => 'Awalan (prefiks)',
                    'C' => 'Sisipan',
                    'D' => 'Konfiks',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'import\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'pasif',
                    'B' => 'ekspor',
                    'C' => 'dinamis',
                    'D' => 'mundur',
                ],
            ],
            [
                'payload' => 'Pantun bersajak?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'a-a-b-b',
                    'B' => 'a-b-a-b',
                    'C' => 'a-a-a-a',
                    'D' => 'a-b-b-a',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'teliti\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'cermat',
                    'B' => 'dungu',
                    'C' => 'gentar',
                    'D' => 'makmur',
                ],
            ],
            [
                'payload' => 'Cerita rakyat \'Sangkuriang\' berasal dari daerah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Bali',
                    'B' => 'Jawa Barat',
                    'C' => 'Sumatera Barat',
                    'D' => 'Sumatera Utara',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'jaman\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Zaman',
                    'B' => 'Foto',
                    'C' => 'Praktik',
                    'D' => 'Aktivitas',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan tempat adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Di mana',
                    'B' => 'Kapan',
                    'C' => 'Bagaimana',
                    'D' => 'Mengapa',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'siang\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'muda',
                    'B' => 'malam',
                    'C' => 'keluar',
                    'D' => 'dingin',
                ],
            ],
            [
                'payload' => 'Kalimat yang mengandung makna kiasan disebut kalimat?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Konotasi',
                    'B' => 'Harfiah',
                    'C' => 'Literal',
                    'D' => 'Denotasi',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'statis\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'bawah',
                    'B' => 'akhir',
                    'C' => 'mati',
                    'D' => 'dinamis',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'kuat\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'perkasa',
                    'C' => 'menolong',
                    'D' => 'pintar',
                ],
            ],
            [
                'payload' => 'Kata yang menyatakan nama benda, orang, atau tempat disebut kata?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Adjektiva',
                    'B' => 'Nomina (kata benda)',
                    'C' => 'Adverbia',
                    'D' => 'Verba',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'berani\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'kekal',
                    'B' => 'duka',
                    'C' => 'masyhur',
                    'D' => 'gagah',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'aktif\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'akhir',
                    'B' => 'benci',
                    'C' => 'lemah',
                    'D' => 'pasif',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cerdik\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'mungil',
                    'B' => 'makmur',
                    'C' => 'tulus',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'buruk\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'tulus',
                    'B' => 'mulia',
                    'C' => 'jelek',
                    'D' => 'merdeka',
                ],
            ],
            [
                'payload' => 'Huruf pertama nama hari, bulan, dan hari besar ditulis dengan huruf?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Tebal',
                    'B' => 'Miring',
                    'C' => 'Kecil',
                    'D' => 'Kapital',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bebas\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'tekun',
                    'B' => 'merdeka',
                    'C' => 'licik',
                    'D' => 'masyhur',
                ],
            ],
            [
                'payload' => 'Kata tanya untuk menanyakan waktu adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Kapan',
                    'B' => 'Mengapa',
                    'C' => 'Di mana',
                    'D' => 'Siapa',
                ],
            ],
            [
                'payload' => 'Daftar sumber referensi yang digunakan dalam sebuah karya tulis disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Daftar isi',
                    'B' => 'Daftar pustaka',
                    'C' => 'Kata pengantar',
                    'D' => 'Lampiran',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'apotik\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Teknik',
                    'B' => 'Karier',
                    'C' => 'Kualitas',
                    'D' => 'Apotek',
                ],
            ],
            [
                'payload' => 'Puisi lama yang bersajak a-b-a-b dan bermakna nasihat disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Mantra',
                    'B' => 'Pantun',
                    'C' => 'Syair',
                    'D' => 'Gurindam',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bohong\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'dusta',
                    'C' => 'elok',
                    'D' => 'sukar',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'pintar\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'cerdas',
                    'B' => 'enggan',
                    'C' => 'tutur',
                    'D' => 'musnah',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'photo\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Karier',
                    'B' => 'Foto',
                    'C' => 'Subjek',
                    'D' => 'Izin',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'obyek\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Nasihat',
                    'B' => 'Praktik',
                    'C' => 'Objek',
                    'D' => 'Analisis',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'terkenal\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'kekal',
                    'B' => 'makmur',
                    'C' => 'dusta',
                    'D' => 'masyhur',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'tua\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'miskin',
                    'B' => 'ekspor',
                    'C' => 'muda',
                    'D' => 'berantakan',
                ],
            ],
            [
                'payload' => 'Bagian cerita yang berisi puncak masalah disebut?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Orientasi',
                    'B' => 'Koda',
                    'C' => 'Komplikasi',
                    'D' => 'Resolusi',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'mudah\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'tulus',
                    'B' => 'permai',
                    'C' => 'gampang',
                    'D' => 'licik',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'gemuk\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'muda',
                    'B' => 'kurus',
                    'C' => 'sedikit',
                    'D' => 'buruk',
                ],
            ],
            [
                'payload' => 'Tanda baca yang digunakan untuk mengakhiri kalimat berita adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Koma (,)',
                    'B' => 'Titik (.)',
                    'C' => 'Seru (!)',
                    'D' => 'Tanya (?)',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'naik\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'mati',
                    'B' => 'berantakan',
                    'C' => 'turun',
                    'D' => 'kering',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'banyak\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'ringan',
                    'B' => 'miskin',
                    'C' => 'sedikit',
                    'D' => 'dingin',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bahagia\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'jelita',
                    'B' => 'senang',
                    'C' => 'mungil',
                    'D' => 'tekun',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'extrakurikuler\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Nasihat',
                    'B' => 'Sekadar',
                    'C' => 'Ekstrakurikuler',
                    'D' => 'Subjek',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'membantu\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'mungil',
                    'B' => 'perkasa',
                    'C' => 'tutur',
                    'D' => 'menolong',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'himbau\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'Karier',
                    'B' => 'Kualitas',
                    'C' => 'Imbau',
                    'D' => 'Aktivitas',
                ],
            ],
            [
                'payload' => 'Imbuhan yang disisipkan di tengah kata disebut?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Konfiks',
                    'B' => 'Akhiran',
                    'C' => 'Awalan',
                    'D' => 'Sisipan (infiks)',
                ],
            ],
            [
                'payload' => 'Kata baku dari \'faham\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Ekstrakurikuler',
                    'B' => 'Paham',
                    'C' => 'Objek',
                    'D' => 'Zaman',
                ],
            ],
            [
                'payload' => 'Cerita fiksi panjang yang menggambarkan kehidupan tokoh disebut?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Puisi',
                    'B' => 'Novel',
                    'C' => 'Cerpen',
                    'D' => 'Drama',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'cepat\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'elok',
                    'B' => 'mulia',
                    'C' => 'laju',
                    'D' => 'gampang',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'menangis\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'tulus',
                    'B' => 'elok',
                    'C' => 'meratap',
                    'D' => 'sukar',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'awal\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'dingin',
                    'B' => 'sedih',
                    'C' => 'belakang',
                    'D' => 'akhir',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'rajin\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'tekun',
                    'B' => 'karib',
                    'C' => 'mulia',
                    'D' => 'perkasa',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'panas\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'dingin',
                    'B' => 'kecil',
                    'C' => 'lambat',
                    'D' => 'buruk',
                ],
            ],
            [
                'payload' => 'Majas yang merendahkan diri untuk merendah disebut majas?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'Metafora',
                    'B' => 'Personifikasi',
                    'C' => 'Hiperbola',
                    'D' => 'Litotes',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'mahal\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'tertutup',
                    'B' => 'murah',
                    'C' => 'bohong',
                    'D' => 'turun',
                ],
            ],
            [
                'payload' => 'Pengarang novel \'Laskar Pelangi\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'Andrea Hirata',
                    'B' => 'Pramoedya Ananta Toer',
                    'C' => 'Ahmad Tohari',
                    'D' => 'Chairil Anwar',
                ],
            ],
            [
                'payload' => 'Sinonim dari kata \'bodoh\' adalah?',
                'correct_answer' => 'C',
                'options' => [
                    'A' => 'gentar',
                    'B' => 'mungil',
                    'C' => 'dungu',
                    'D' => 'enggan',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'berani\' adalah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'rugi',
                    'B' => 'takut',
                    'C' => 'malam',
                    'D' => 'mati',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'rajin\' adalah?',
                'correct_answer' => 'D',
                'options' => [
                    'A' => 'ringan',
                    'B' => 'rendah',
                    'C' => 'malam',
                    'D' => 'malas',
                ],
            ],
            [
                'payload' => 'Antonim (lawan kata) dari kata \'masuk\' adalah?',
                'correct_answer' => 'A',
                'options' => [
                    'A' => 'keluar',
                    'B' => 'malas',
                    'C' => 'bawah',
                    'D' => 'baru',
                ],
            ],
            [
                'payload' => 'Cerita rakyat \'Malin Kundang\' berasal dari daerah?',
                'correct_answer' => 'B',
                'options' => [
                    'A' => 'Jawa Barat',
                    'B' => 'Sumatera Barat',
                    'C' => 'Kalimantan Timur',
                    'D' => 'Sulawesi Selatan',
                ],
            ],
        ],
    ];

    public function run(): void
    {
        foreach ($this->data as $subjectName => $questions) {
            $subject = Subject::firstOrCreate(
                ['name' => $subjectName],
                ['is_active' => true]
            );

            $this->command->info("Seeding {$subjectName}: " . count($questions) . ' soal...');

            foreach ($questions as $item) {
                $question = Question::create([
                    'subject_id' => $subject->id,
                    'payload' => $item['payload'],
                    'correct_answer' => $item['correct_answer'],
                    'score' => 1,
                    'is_active' => true,
                ]);

                foreach ($item['options'] as $letter => $text) {
                    Answer::create([
                        'question_id' => $question->id,
                        'letter' => $letter,
                        'text' => $text,
                        'is_correct' => $letter === $item['correct_answer'],
                        'is_active' => true,
                    ]);
                }
            }
        }

        $this->command->info('Selesai! Total soal: ' . Question::count());
    }
}