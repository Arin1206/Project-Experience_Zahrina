package alpro;
import java.util.Scanner;
public class BanyakAnak {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		System.out.println("Masukkan Jumlah Bayi : ");
		int jumbayi = sc.nextInt();
		switch (jumbayi){
			case 1 :
				System.out.println("Selamat!.");
			break;
			case 2 :
				System.out.println("Wow Kembar");
			break;
			case 3 :
				System.out.println("Wow kembar Tiga");
			break;
			case 4 :
			case 5 :
				System.out.println("hebat "+jumbayi+" bayi.");
			break;
			default :
				System.out.println("Saya tidak percaya");
		}
	}

}
