<?php
class M_post extends CI_Model{

	// Beranda ----------------------------------------------------------
	// Home Model
	public function get_data_home()
	{
		return $this->db->get('slider');
	}

	public function get_data_home_post()
	{
		$data=$this->db->query("SELECT id_slider,deskripsi,gambar AS gambar,deskripsi FROM slider ORDER BY id_slider DESC");
		return $data;
	}
	// End Home Model

	// Pengumuman Model
	public function get_data_pengumuman()
	{
		return $this->db->get('pengumuman');
	}

	public function get_data_pengumuman_terpublikasi($status='terpublikasi')
	{
		$data=$this->db->query("SELECT id_pengumuman,pengumuman,status AS status,pengumuman FROM pengumuman WHERE status='terpublikasi' ORDER BY id_pengumuman DESC limit 6");
		return $data;
	}

	public function get_data_pengumuman_terpublikasi_all($status='terpublikasi')
	{
		$data=$this->db->query("SELECT id_pengumuman,pengumuman,status,tanggal AS tanggal,status,pengumuman FROM pengumuman WHERE status='terpublikasi' ORDER BY id_pengumuman DESC");
		return $data;
	}
	// End Pengumuman Model

	// Berita Model
	public function get_data_berita()
	{
		return $this->db->get('berita');
	}

	public function get_berita_by_slug($slug){
		$data=$this->db->query("SELECT * FROM berita WHERE berita_slug='$slug'");
		return $data;
	}

	public function get_data_berita_post()
	{
		$data=$this->db->query("SELECT id_berita,judul,redaksi,tanggal,gambar,kategori,berita_id_user,author,berita_slug AS berita_slug,author,berita_id_user,kategori,gambar,tanggal,redaksi,judul FROM berita ORDER BY id_berita DESC limit 4");
		return $data;
	}

	public function get_data_berita_post_internal($kategori='internal')
	{
		$data=$this->db->query("SELECT id_berita,judul,redaksi,tanggal,gambar,kategori,berita_id_user,author,berita_slug AS berita_slug,author,berita_id_user,kategori,gambar,tanggal,redaksi,judul FROM berita WHERE kategori='internal' ORDER BY id_berita DESC limit 4");
		return $data;
	}

	public function get_data_berita_post_eksternal($kategori='eksternal')
	{
		$data=$this->db->query("SELECT id_berita,judul,redaksi,tanggal,gambar,kategori,berita_id_user,author,berita_slug AS berita_slug,author,berita_id_user,kategori,gambar,tanggal,redaksi,judul FROM berita WHERE kategori='eksternal' ORDER BY id_berita DESC limit 4");
		return $data;
	}
	// End Berita Model

	// Quotes Model
	public function get_data_quotes()
	{
		return $this->db->get('quotes');
	}

	public function get_data_quotes_post()
	{
		$data=$this->db->query("SELECT id_quotes,nama,status,quotes AS quotes,status,nama FROM quotes ORDER BY id_quotes ASC");
		return $data;
	}
	// End Quotes Model
	// End Beranda ------------------------------------------------------

	// Profil Model -----------------------------------------------------
	// Sambutan Model
	public function get_data_sambutan()
	{
		return $this->db->get('sambutan');
	}

	public function get_data_sambutan_post()
	{
		$data=$this->db->query("SELECT id_sambutan,nama,sambutan,foto,tanggal AS tanggal,foto,sambutan,nama FROM sambutan ORDER BY id_sambutan DESC limit 1");
		return $data;
	}
	// End Sambutan Model

	// Visi-Misi Model
	public function get_data_visimisi()
	{
		return $this->db->get('visimisi');
	}

	public function get_data_visimisi_post()
	{
		$data=$this->db->query("SELECT id_visimisi,visi,misi,tanggal AS tanggal,misi,visi FROM visimisi ORDER BY id_visimisi DESC limit 1");
		return $data;
	}
	// End Visi-Misi Model

	// Struktur Organisasi Model
	public function get_data_strukturorganisasi()
	{
		return $this->db->get('strukturorganisasi');
	}

	public function get_data_strukturorganisasi_post()
	{
		$data=$this->db->query("SELECT id_strukturorganisasi,gambar,tanggal AS tanggal,gambar FROM strukturorganisasi ORDER BY id_strukturorganisasi DESC limit 1");
		return $data;
	}
	// End Struktur Organisasi Model
	// End Profil Model -------------------------------------------------


	// Kategori ---------------------------------------------------------
	// Beasiswa Model
	public function get_data_beasiswa()
	{
		$data=$this->db->query("SELECT * FROM beasiswa ORDER BY id_beasiswa DESC");
		return $data;

	}

	public function get_beasiswa_by_slug($slug){
		$data=$this->db->query("SELECT * FROM beasiswa WHERE beasiswa_slug='$slug'");
		return $data;
	}

	public function get_data_beasiswa_post()
	{
		$data=$this->db->query("SELECT id_beasiswa,nama,persyaratan,deskripsi,keunggulan,tanggal_penting,kategori,link_pendaftaran,gambar,tanggal,status,beasiswa_slug AS beasiswa_slug,status,tanggal,gambar,link_pendaftaran,kategori,tanggal_penting,keunggulan,deskripsi,persyaratan,nama FROM beasiswa WHERE status='terpublikasi' ORDER BY id_beasiswa DESC limit 6");
		return $data;
	}

	public function get_data_beasiswa_lokal()
	{
		$data=$this->db->query("SELECT id_beasiswa,nama,persyaratan,deskripsi,keunggulan,tanggal_penting,kategori,link_pendaftaran,gambar,tanggal,status,beasiswa_slug AS beasiswa_slug,status,tanggal,gambar,link_pendaftaran,kategori,tanggal_penting,keunggulan,deskripsi,persyaratan,nama FROM beasiswa WHERE kategori='lokal' and status='terpublikasi' ORDER BY id_beasiswa DESC limit 6");
		return $data;
	}

	public function get_data_beasiswa_wilayah()
	{
		$data=$this->db->query("SELECT id_beasiswa,nama,persyaratan,deskripsi,keunggulan,tanggal_penting,kategori,link_pendaftaran,gambar,tanggal,status,beasiswa_slug AS beasiswa_slug,status,tanggal,gambar,link_pendaftaran,kategori,tanggal_penting,keunggulan,deskripsi,persyaratan,nama FROM beasiswa WHERE kategori='wilayah' and status='terpublikasi' ORDER BY id_beasiswa DESC limit 6");
		return $data;
	}

	public function get_data_beasiswa_nasional()
	{
		$data=$this->db->query("SELECT id_beasiswa,nama,persyaratan,deskripsi,keunggulan,tanggal_penting,kategori,link_pendaftaran,gambar,tanggal,status,beasiswa_slug AS beasiswa_slug,status,tanggal,gambar,link_pendaftaran,kategori,tanggal_penting,keunggulan,deskripsi,persyaratan,nama FROM beasiswa WHERE kategori='nasional' and status='terpublikasi' ORDER BY id_beasiswa DESC limit 6");
		return $data;
	}

	public function get_data_beasiswa_internasional()
	{
		$data=$this->db->query("SELECT id_beasiswa,nama,persyaratan,deskripsi,keunggulan,tanggal_penting,kategori,link_pendaftaran,gambar,tanggal,status,beasiswa_slug AS beasiswa_slug,status,tanggal,gambar,link_pendaftaran,kategori,tanggal_penting,keunggulan,deskripsi,persyaratan,nama FROM beasiswa WHERE kategori='internasional' and status='terpublikasi' ORDER BY id_beasiswa DESC limit 6");
		return $data;
	}

	public function get_beasiswa_daftar_by_slug($slug)
	{
		$data=$this->db->query("SELECT * FROM beasiswa WHERE beasiswa_slug='$slug'");
		return $data;
	}
	// End Beasiswa Model

	// Unduhan Model
	public function get_data_unduhan()
	{
		return $this->db->get('unduhan');
	}

	public function get_files_byid($id){
		$data=$this->db->query("SELECT id_unduhan,nama,tanggal,lampiran AS lampiran,tanggal,nama FROM unduhan WHERE id_unduhan='$id'");
		return $data;
	}

	public function get_data_files_unduhan()
	{
		$data=$this->db->query("SELECT id_unduhan,nama,tanggal,lampiran,DATE_FORMAT(tanggal,'%d/%m/%Y') AS lampiran,tanggal,nama FROM unduhan ORDER BY id_unduhan ASC limit 10");
		return $data;
	}
	// End Unduhan Model
	// End Kategori------------------------------------------------------

	// Kegiatan Model ---------------------------------------------------
	public function get_data_kegiatan()
	{
		return $this->db->get('kegiatan');
	}

	public function get_kegiatan_by_slug($slug){
		$data=$this->db->query("SELECT * FROM kegiatan WHERE kegiatan_slug='$slug'");
		return $data;
	}

	public function get_data_kegiatan_terpublikasi()
	{
		$data=$this->db->query("SELECT id_kegiatan,nama,kategori,peserta,jumlah_peserta,tanggal,kegiatan_id_user,ormawa,deskripsi,status,gambar,kegiatan_slug AS kegiatan_slug,gambar,status,deskripsi,ormawa,kegiatan_id_user,tanggal,jumlah_peserta,peserta,kategori,nama FROM kegiatan WHERE status='terpublikasi' ORDER BY id_kegiatan DESC limit 6");
		return $data;
	}

	public function get_data_kegiatan_terpublikasi_pendpenga($kategori='pendpenga')
	{
		$data=$this->db->query("SELECT id_kegiatan,nama,kategori,peserta,jumlah_peserta,tanggal,kegiatan_id_user,ormawa,deskripsi,status,gambar,kegiatan_slug AS kegiatan_slug,gambar,status,deskripsi,ormawa,kegiatan_id_user,tanggal,jumlah_peserta,peserta,kategori,nama FROM kegiatan WHERE kategori='pendpenga' && status='terpublikasi' ORDER BY id_kegiatan DESC limit 6");
		return $data;
	}

	public function get_data_kegiatan_terpublikasi_penlpenge($kategori='penlpenge')
	{
		$data=$this->db->query("SELECT id_kegiatan,nama,kategori,peserta,jumlah_peserta,tanggal,kegiatan_id_user,ormawa,deskripsi,status,gambar,kegiatan_slug AS kegiatan_slug,gambar,status,deskripsi,ormawa,kegiatan_id_user,tanggal,jumlah_peserta,peserta,kategori,nama FROM kegiatan WHERE kategori='penlpenge' && status='terpublikasi' ORDER BY id_kegiatan DESC limit 6");
		return $data;
	}

	public function get_data_kegiatan_terpublikasi_pkm($kategori='pkm')
	{
		$data=$this->db->query("SELECT id_kegiatan,nama,kategori,peserta,jumlah_peserta,tanggal,kegiatan_id_user,ormawa,deskripsi,status,gambar,kegiatan_slug AS kegiatan_slug,gambar,status,deskripsi,ormawa,kegiatan_id_user,tanggal,jumlah_peserta,peserta,kategori,nama FROM kegiatan WHERE kategori='pkm' && status='terpublikasi' ORDER BY id_kegiatan DESC limit 6");
		return $data;
	}
	// End Kegiatan Model ----------------------------------------------

	// public function getbyid($id_kegiatan){
	// 	$this->db->select('*');
	// 	$this->db->from('kegiatan');
	// 	$this->where('id_kegiatan', $id_kegiatan);
	// 	$this->order_by('id_kegiatan','desc');
	// 	$query = $this->db->get();

	// 	return $query->row();
	// }

	// Galeri Model -----------------------------------------------------
	public function get_data_galeri()
	{
		return $this->db->get('kegiatan');
	}

	public function get_data_galeri_terpublikasi()
	{
		$data=$this->db->query("SELECT id_kegiatan,nama,kategori,peserta,jumlah_peserta,tanggal,kegiatan_id_user,ormawa,deskripsi,status,gambar AS gambar,status,deskripsi,ormawa,kegiatan_id_user,tanggal,jumlah_peserta,peserta,kategori,nama FROM kegiatan WHERE status='terpublikasi' ORDER BY id_kegiatan DESC limit 9");
		return $data;
	}
	// End Galeri Model -------------------------------------------------

	// FAQ Model --------------------------------------------------------
	public function get_data_faq_all()
	{
		return $this->db->get('faq');
	}

	public function get_data_faq()
	{
		$data=$this->db->query("SELECT id_faq,pertanyaan,jawaban AS jawaban,pertanyaan FROM faq ORDER BY id_faq ASC limit 10"); 
		return $data;
	}
	// End FAQ Model ----------------------------------------------------

	// Pendaftar Model -------------------------------------------------------
	public function get_data_pendaftar_all()
	{
		return $this->db->get('faq');
	}

	public function get_data_pendaftar()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_mhs()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='mhs' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_if()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='if' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_tm()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='tm' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_ti()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='ti' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_mi()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='mi' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_pendaftar_prodi_teks()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE prodi='teks' ORDER BY id_pendaftar");
		return $data;
	}
	// End Pendaftar Model ----------------------------------------------------

	// Penerima Model -------------------------------------------------------
	public function get_data_penerima_all()
	{
		return $this->db->get('faq');
	}

	public function get_data_penerima()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_penerima_prodi_if()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 and prodi='if' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_penerima_prodi_tm()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 and prodi='tm' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_penerima_prodi_ti()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 and prodi='ti' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_penerima_prodi_mi()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 and prodi='mi' ORDER BY id_pendaftar");
		return $data;
	}

	public function get_data_penerima_prodi_teks()
	{
		$data=$this->db->query("SELECT * FROM pendaftar WHERE status=2 and prodi='teks' ORDER BY id_pendaftar");
		return $data;
	}
	// End Penerima Model ----------------------------------------------------

	// Kegiatan Model -------------------------------------------------------
	public function get_data_kegiatan_all()
	{
		return $this->db->get('faq');
	}

	public function get_data_kegiatan_ormawa_BEM()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Badan Eksekutif Mahasiswa (BEM)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_HMTI()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Himpunan Mahasiswa Teknik Industri (HMTI)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_HMM()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Himpunan Mahasiswa Mesin (HMM)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_HUMANIKA()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Himpunan Mahasiswa Teknik Informatika (HUMANIKA)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_HM2I()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Himpunan Mahasiswa Manajemen Industri (HM2I)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_HIMATEK()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Himpunan Mahasiswa Teknik Tekstil (HIMATEK)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_MAPALAWASKA()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Mahasiswa Pecinta Alam Wastukancana (MAPALAWASKA)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_LPMWaska()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Lembaga Pers Mahasiswa Wastukancana (LPM Waska)' ORDER BY id_kegiatan");
		return $data;
	}

	public function get_data_kegiatan_ormawa_LDKWaska()
	{
		$data=$this->db->query("SELECT * FROM kegiatan WHERE ormawa='Lembaga Dakwah Kampus Wastukancana (LDK Waska)' ORDER BY id_kegiatan");
		return $data;
	}
	// End Kegiatan Model ----------------------------------------------------
}
?>