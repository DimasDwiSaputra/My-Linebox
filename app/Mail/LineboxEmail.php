<?php
 
namespace App\Mail;
 
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
 
class LineboxEmail extends Mailable
{
    use Queueable, SerializesModels;
 
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
       return $this->from('pengirim@malasngoding.com')
                   ->view('projectku/emailku')
                   ->with(
                    [
                        'nama' => 'Dimas Dwi Saputra',
                        'website' => 'www.linebox.com',
                        'isi' => 'LAPORAN KEUANGAN 
DAN
 PENCATATAN TRANSAKSI

Laporan Keuangan : merupakan media komunikasi dan pertanggungjawaban antara perusahaan (manajemen) dan para pemiliknya atau pihak lain.
Laporan keuangan akan menggambarkan kondisi dan posisi keuangan serta hasil usaha suatu perusahaan pada periode tertentu.
Jenis – jenis laporan keuangan :
1. Laporan Laba Rugi (Income Statement)
  Melaporkan pendapatan dan beban selama periode waktu tertentu.
Tujuannya :   untuk memberikan informasi tentang keberhasilan manajemen dalam       mengelola perusahaan (yang diukur dari laba) dalam suatu periode.

Laporan Laba Rugi dapat disajikan dengan 2 cara :
a.  Single Step : seluruh pendapatan dikumpulkan menjadi satu, setelah itu  dikurangi dengan seluruh beban / biaya.
  Biasa digunakan pada perusahaan jasa
  Bentuk :












b.  Multiple Step : penyusunan laboran Laba / Rugi dilakukan secara bertahap, mulai          dari kelompok Pendapatan dan Biaya Usaha, Pendapatan Luar         Usaha dan Biaya Luar Usaha.

  Biasa digunakan pada Perusahaan Dagang dan Manufaktur
  Bentuk :

























2. Laporan Perubahan Ekuitas / Modal ( Statement of Owner’s Equity)
  suatu ikhtisar yang melaporkan perubahan modal / ekuitas pemilik yang terjadi   selama periode waktu tertentu.
Bentuk :
Laporan perubahan modal perusahaan perseorangan, CV dan Firma









Laporan perubahan modal untuk perusahaan berbentu Perseroan Terbatas (PT) ~ Biasanya disebut sebagai Laporan Perubahan Laba Ditahan















3. Laporan Neraca (Balance Sheet)
  suatu daftar aktiva, kewajiban dan ekuitas pemilik pada tanggal tertentu, biasanya  pada akhir bulan atau akhir tahun

manfaat :
a. Memberikan informasi tentang posisi keuangan perusahaan pada saat tertentu
b. Menilai likuiditas dan kelancaran operasi perusahaan 
c. Menilai struktur pendanaan perusahaan
d. Menganalisis komposisi kekayaan dan potensi jasa perusahaan
e. Mengevaluasi potensi jasa atau sumber ekonomik yang dikuasai perusahaan

Bentuk :
a. Report Form


















b. T – Account






























4. Laporan Arus Kas (Statement of Cash Flows)
  Ikhtisar dari penerimaan dan pengeluaran kas pada suatu periode waktu / masa tertentu.


























  '
                    ]);
  
    }
}