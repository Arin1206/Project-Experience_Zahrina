package alpro;
import java.util.Random;
public class WhilePrima {

	public static void main(String[] args) {
		Random acak = new Random();
		float papanketik = acak.nextFloat();
		System.out.println("x = "+papanketik);
		int n = (int)Math.floor(1000*papanketik);
		boolean apaprima=(n>1);
		int d =2;
		while (apaprima && d <n)
			apaprima = (n%d++ !=0);
		if (apaprima) System.out.println(n+ " adalah bilangan prima");
		else System.out.println(n+ " bukan bilangan prima");
		

	}

}
