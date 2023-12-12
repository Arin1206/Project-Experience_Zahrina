package alpro;
import java.util.Scanner;
public class DemoArraySatuDimensi {

	public static void main(String[] args) {
		Scanner array = new Scanner (System.in);
		System.out.println("Masukkan jumlah bilangan yang akan dirata rata");
		int n = array.nextInt();
		double hasil = 0;
		int i;
		double rata = 0;
		
		
			System.out.println("Masukkan bilangan dalam desimal");
			for (i =0;i<n;i++) {
			double arrayangka [] = new double [10];
			arrayangka [i] = array.nextDouble();
			hasil += arrayangka [i];
			rata = hasil/n;
			}
			System.out.println ("Rerata adalah " +rata);

}
}