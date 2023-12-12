package alpro;
import java.util.Random;
public class DemoIfElseOperator {

	public static void main(String[] args) {
		Random t = new Random ();
		float f = t.nextFloat();
		System.out.println(f);
		if (f<0.25||f>0.75)
			System.out.println("f<0.25 atau f>0.75");
		else
			System.out.println("0.25<="+f+" <0.75");
	}

}
