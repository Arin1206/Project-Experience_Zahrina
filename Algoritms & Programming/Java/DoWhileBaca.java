package alpro;
import java.util.Scanner;
public class DoWhileBaca {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		int kounter,angka;
			System.out.println("Masukkan Sebuah angka : ");
			angka = sc.nextInt();
			kounter = 1;
		do {
			System.out.print(kounter+",");kounter++;
		}while (kounter <= angka);
		System.out.println("\nHidup Indonesia!");		
	}

}
