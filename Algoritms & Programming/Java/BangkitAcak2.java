package alpro;
import java.util.Random;
public class BangkitAcak2 {

	public static void main(String[] args) {
		Random rm = new Random();
		int m = rm.nextInt();
		System.out.println("m = "+m);
		int n = rm.nextInt();
		System.out.println("n = "+n);
		if (m<n) {
			System.out.println("nilai minimum adalah = "+m);
		}else {
			System.out.println("nilai minimum adalah = "+n);
		}

	}

}
