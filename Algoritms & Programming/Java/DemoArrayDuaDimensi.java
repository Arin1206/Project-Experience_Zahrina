package alpro;
import java.util.Scanner;
public class DemoArrayDuaDimensi {

	public static void main(String[] args) {
		Scanner sc = new Scanner (System.in);
		int duaD [][]= new int [99][99];
		System.out.println("masukkan jumlah baris : ");
		int m = sc.nextInt();
		System.out.println("masukkan jumlah kolom : ");
		int n = sc.nextInt();
		int i,j,k =0;
		
		for (i=0;i<m;i++) 
			for (j=0;j<n;j++) {
				duaD[i][j]=sc.nextInt();
			}
		for (i=0;i<m;i++) {
			for (j=0;j<n;j++) 
				System.out.print(duaD[i][j]+" ");
				System.out.println();
			
		}
		}

	}

