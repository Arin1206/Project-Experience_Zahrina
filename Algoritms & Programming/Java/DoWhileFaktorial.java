package alpro;
import java.util.Random;
public class DoWhileFaktorial {

	public static void main(String[] args) {
		Random acak = new Random();
		float x = acak.nextFloat();
		int n = Math.round(x*21);
		long f = 1;
		int k =1;
		do {
			f*=k++;
			System.out.println(k+" = "+f);
		}while (k<=n);
		System.out.println(n+" != "+f);

	}

}
