package alpro;
import java.util.Random;
public class Metodmin {

	public static void main(String[] args) {
		Random acak= new Random ();
		for (int i =0;i<5;i++) {
			float x = acak.nextFloat();
			int m = Math.round(100*x);
			x= acak.nextFloat();
			int n = Math.round(100*x);
			int y=min(m,n);
			System.out.println("min( "+m+" , "+n+" ) = "+y);
		}
		

	}
	static int min (int x,int y) {
		if (x<y)return x;
		else return y;
	}

}
