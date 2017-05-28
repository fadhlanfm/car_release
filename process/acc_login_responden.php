<?php 
session_start();
include('../process/connect_db.php');
if(isset($_POST['id']) && isset($_POST['password']))
{
	$id_resp = secure($_POST['id'], $mysqli);
	$pass_resp =  secure($_POST['password'], $mysqli);
	
	$q = "SELECT * FROM user WHERE username = '$id_resp' AND password = '$pass_resp' AND role = 1";
	$result = $db->query($q);
	$row = $result->fetch_object();
	if($res = $mysqli->query($q))
	{
		if($res->num_rows > 0)
		{
			$_SESSION['id'] = $id_resp;
			$_SESSION['role'] = $row->role;
			$_SESSION['unit'] = $row->unit;
			switch ($_SESSION['unit']) {
				case 'JKTDA':
					$_SESSION['nama'] = 'Internal Audit';
					break;

				case 'JKTDB':
					$_SESSION['nama'] = 'Corporate Development Strategy';
					break;

				case 'JKTDH':
					$_SESSION['nama'] = 'Acquisition & Aircraft Management';
					break;

				case 'JKTDK':
					$_SESSION['nama'] = 'Corporate Security';
					break;

				case 'JKTDP':
					$_SESSION['nama'] = 'Corporate Communication';
					break;

				case 'JKTDV':
					$_SESSION['nama'] = 'Corporate Quality, Safety, & Environment Management';
					break;

				case 'JKTWI':
					$_SESSION['nama'] = 'Corporate Secretary & Investor Relation';
					break;

				case 'JKTID':
					$_SESSION['nama'] = 'Human Capital Management';
					break;

				case 'JKTIB':
					$_SESSION['nama'] = 'Business Support & General Affairs';
					break;

				case 'JKTVZ':
					$_SESSION['nama'] = 'Learning & Development';
					break;

				case 'JKTIH':
					$_SESSION['nama'] = 'SBU Garuda Sentra Medika';
					break;

				case 'JKTWL':
					$_SESSION['nama'] = 'Financial Analysis';
					break;

				case 'JKTWF':
					$_SESSION['nama'] = 'Treasury Management';
					break;

				case 'JKTWA':
					$_SESSION['nama'] = 'Financial Accounting';
					break;

				case 'JKTWR':
					$_SESSION['nama'] = 'Enterprise Risk Management';
					break;

				case 'CC':
					$_SESSION['nama'] = 'Cargo Commercial';
					break;

				case 'CO':
					$_SESSION['nama'] = 'Cargo Operations';
					break;
				
				case 'JKTOF':
					$_SESSION['nama'] = 'Flight Operations';
					break;

				case 'JKTOG':
					$_SESSION['nama'] = 'Opearation Planning & Control';
					break;

				case 'JKTOS':
					$_SESSION['nama'] = 'Opearation Support';
					break;

				case 'JKTML':
					$_SESSION['nama'] = 'Aircraft Maintenance Management';
					break;

				case 'JKTMQ':
					$_SESSION['nama'] = 'Airworthiness Management';
					break;

				case 'JKTMX':
					$_SESSION['nama'] = 'IT Strategy';
					break;

				case 'JKTCG':
					$_SESSION['nama'] = 'Ground Services';
					break;

				case 'JKTCI':
					$_SESSION['nama'] = 'Inflight Services';
					break;

				case 'JKTCC':
					$_SESSION['nama'] = 'Cabin Services';
					break;

				case 'JKTCM':
					$_SESSION['nama'] = 'Marketing';
					break;

				case 'JKTCM':
					$_SESSION['nama'] = 'Marketing';
					break;

				case 'JKTRZ':
					$_SESSION['nama'] = 'Revenue Management';
					break;

				case 'JKTCR':
					$_SESSION['nama'] = 'Customer Relation Management';
					break;

				case 'JKTCP':
					$_SESSION['nama'] = 'Alliance & Partnership Management';
					break;

				case 'JKTCD':
					$_SESSION['nama'] = 'Coordinator Sales & Distribution';
					break;

				case 'JKTEC':
					$_SESSION['nama'] = 'Digital Business';
					break;

				case 'MESDM':
					$_SESSION['nama'] = 'Branch Office Medan';
					break;

				case 'PLMDM':
					$_SESSION['nama'] = 'Branch Office Palembang';
					break;

				case 'BTJDM':
					$_SESSION['nama'] = 'Branch Office Banda Aceh';
					break;

				case 'BTHDM':
					$_SESSION['nama'] = 'Branch Office Batam';
					break;

				case 'DJBDM':
					$_SESSION['nama'] = 'Branch Office Jambi';
					break;

				case 'PDGDM':
					$_SESSION['nama'] = 'Branch Office Padang';
					break;

				case 'PKUDM':
					$_SESSION['nama'] = 'Branch Office Pekanbaru';
					break;

				case 'TKGDM':
					$_SESSION['nama'] = 'Branch Office Tanjung Karang';
					break;

				case 'BKSDM':
					$_SESSION['nama'] = 'Branch Office Bengkulu';
					break;

				case 'GNSDM':
					$_SESSION['nama'] = 'Branch Office Gunungsitoli';
					break;

				case 'LSWDM':
					$_SESSION['nama'] = 'Branch Office Lhokseumawe';
					break;

				case 'PGKDM':
					$_SESSION['nama'] = 'Branch Office Pengkal Pinang';
					break;

				case 'FLZDM':
					$_SESSION['nama'] = 'Branch Office Pinangsori';
					break;

				case 'SBGDM':
					$_SESSION['nama'] = 'Branch Office Sabang';
					break;

				case 'DTBDM':
					$_SESSION['nama'] = 'Branch Office Silangit';
					break;

				case 'TJQDM':
					$_SESSION['nama'] = 'Branch Office Tanjung Pandan';
					break;

				case 'TNJDM':
					$_SESSION['nama'] = 'Branch Office Tanjung Pinang';
					break;

				case 'SUBDM':
					$_SESSION['nama'] = 'Branch Office Surabaya';
					break;

				case 'JOGDM':
					$_SESSION['nama'] = 'Branch Office Jogjakarta';
					break;

				case 'SRGDM':
					$_SESSION['nama'] = 'Branch Office Semarang';
					break;

				case 'DPSDM':
					$_SESSION['nama'] = 'Branch Office Denpasar';
					break;

				case 'SOCDM':
					$_SESSION['nama'] = 'Branch Office Solo';
					break;

				case 'AMIDM':
					$_SESSION['nama'] = 'Branch Office Mataram';
					break;

				case 'MLGDM':
					$_SESSION['nama'] = 'Branch Office Malang';
					break;

				case 'JBBDM':
					$_SESSION['nama'] = 'Branch Office Jember';
					break;

				case 'BWXDM':
					$_SESSION['nama'] = 'Branch Office Banyuwangi';
					break;

				case 'KOEDM':
					$_SESSION['nama'] = 'Branch Office Kupang';
					break;

				case 'LBJDM':
					$_SESSION['nama'] = 'Branch Office Labuan Bajo';
					break;

				case 'TMCDM':
					$_SESSION['nama'] = 'Branch Office Tambolaku';
					break;

				case 'ENEDM':
					$_SESSION['nama'] = 'Branch Office Ende';
					break;

				case 'SWQDM':
					$_SESSION['nama'] = 'Branch Office Sumbawa Besar';
					break;

				case 'BMUDM':
					$_SESSION['nama'] = 'Branch Office Bima';
					break;

				//kurang upgam ke kanan

				default:
					$_SESSION['nama'] = $_SESSION['unit'];
					break;
			}
			echo 
			"<script>
				window.location.href = '../production/user/index.php';
			</script>";
			exit;
		}
		else
		{
  			echo "<script type='text/javascript'>
  			window.location.href = '../login_responden.php?alert=1';
  			</script>";
  			exit;
		}
	}
}
?>