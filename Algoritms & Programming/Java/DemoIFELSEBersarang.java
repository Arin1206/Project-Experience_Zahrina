package alpro;
import java.util.Scanner;
public class DemoIFELSEBersarang {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		String jawaban =null;
		do {System.out.println("Masukkan Skor anda : ");
		int Skor = sc.nextInt();
		char Nilai;
		if (Skor >= 90) 
			Nilai='A';
		else if (Skor >= 80)
			Nilai = 'B';
		else if (Skor >= 70)
			Nilai = 'C';
		else if (Skor >= 60)
			Nilai = 'D';
		else 
			Nilai = 'F';
		System.out.println("Skor = "+Skor);
		System.out.println("Nilai = "+Nilai);
		System.out.println("Jika ingin mengulang ketik ya,jika tidak ketik tidak.");
		jawaban = sc.next(); 
		}while (jawaban.equalsIgnoreCase("ya"));
	}

}
