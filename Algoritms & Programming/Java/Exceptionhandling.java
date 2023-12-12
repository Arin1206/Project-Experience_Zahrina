package alpro;

public class Exceptionhandling {

	public static void main(String[] args) {
		 int ar[] = new int[3];
		 ar[0]=1;
		 ar[1]=2;
	        try {
	            for (int i = 0; i <= ar.length; i++)
	                System.out.print(ar[i]+" ");
	        }
	        	catch (Exception e) {
	        		ar[2]=ar[1];
	        		ar[1]=3;
	        		
	        	if (ar[1]!=2)
	            System.out.println("\nException caught");
	        	}
	        finally {
	        	for (int i = 0; i <= ar.length; i++)
	                System.out.print(ar[i]+" ");
	        }
	}

}
