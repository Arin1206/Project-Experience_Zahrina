package alpro;

import java.util.Arrays;

public class EAS2 {

	public static void main(String[] args) {
		int []array1 = {1,3,7,11,13};
		for (int i=1;i<array1.length;i++) {
			array1 [i]= array1[i-1];
		}
		System.out.println(Arrays.toString(array1[i]));
	}

}
