package alpro;

public class NestedForDemo {

	public static void main(String[] args) {
		
		  int maximum= 10; 
			/*
			 * for (int i=0;i<maximum;i++) { for (int j=0;j<maximum;j++) {
			 * System.out.print("i="+i+" j= "+j+" |"); } System.out.println();
			 * System.out.println(); }
			 */
		  for (int i=0;i<maximum;i++) {
			  for(int j=10;j>i;j--) {
				  System.out.print("*");
			  }
			  System.out.println();
		  }
	}

}
