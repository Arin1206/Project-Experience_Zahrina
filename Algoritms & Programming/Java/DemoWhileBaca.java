package alpro;
import java.util.Scanner;
public class DemoWhileBaca {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		System.out.println("masukkan Sebuah angka");
		int papanketik = sc.nextInt();
		int Kounter = 1;
		while (Kounter<=papanketik) {
			System.out.print(Kounter+",");Kounter++;
		}
		System.out.println();
		System.out.println("Hidup Indoensia !");
	}
}
	
