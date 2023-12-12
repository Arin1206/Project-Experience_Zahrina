package alpro;
import java.util.Scanner;
public class GunakanIFELSE {

	public static void main(String[] args) {
		Scanner s = new Scanner (System.in);
		String ulang= "y ";
		int Cari = 0;
		double Biaya_Admin = 8000;
		double Suku_Bunga = 0.02;
		double Saldo;
		String kodeakun=null;
		String akun = "me";
		String akun2= "xo";
		do{System.out.println("masukkan saldo anda: Rp. ");
			Saldo= s.nextDouble();
			System.out.println("masukkan nama akun anda : ");
				if (s.hasNext()& Saldo >=0){
					kodeakun= s.next();
					System.out.println("Saldo awal Rp."+Saldo);
					Saldo=Saldo +(Suku_Bunga + Saldo);
				}else
					System.out.println("Saldo awal Rp."+Saldo);
					Saldo=Saldo-Biaya_Admin;
				switch(kodeakun) {
					case ("me"):
						System.out.println("segera update mobile banking anda, karena ada versi terbaru");
						System.out.println("setelah berjalan satu bulan");
						System.out.println("dengan pertimbangan bunga dan biaya admin");
						System.out.println("saldo baru anda adalah Rp. "+  Saldo);
						ulang= s.next();
						if(ulang.equalsIgnoreCase("berhenti")) {
							System.out.println("selamat tinggal semoga anda terbantu");		
						}
						break;
					case ("xo"):
						System.out.println("tidak ada update");
						System.out.println("setelah berjalan satu bulan");
						System.out.println("dengan pertimbangan bunga dan biaya admin");
						System.out.println("saldo baru anda adalah Rp. "+  Saldo);
						ulang= s.next();
						if(ulang.equalsIgnoreCase("berhenti")) {
							System.out.println("selamat tinggal semoga anda terbantu");		
						}
						break;
					default :
						System.out.println("akun anda salah");
						System.out.println("silahkan kembali mencari atau berhenti");
						ulang= s.next();
						if(ulang.equalsIgnoreCase("berhenti")) {
							System.out.println("selamat tinggal semoga anda terbantu");		
						}
						break;
						
					}
				}while (ulang.equalsIgnoreCase("x"));		
		}
		
	}


