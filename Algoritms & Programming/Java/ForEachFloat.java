package alpro;
import java.util.Random;
public class ForEachFloat {

	public static void main(String[] args) {
		Random acak = new Random ();
		float f []= new float [10];
		for (int i =0;i<10;i++) {
			f[i]=acak.nextFloat();
		}
		for (float x : f) {
			System.out.println(x);
		}
		

	}

}
