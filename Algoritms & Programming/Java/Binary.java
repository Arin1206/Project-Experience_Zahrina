package alpro;
import java.util.Scanner;
import java.util.Arrays;
public class Binary {
	public static int Binarysearch(int[]a,int key,int low, int high) {
		int index=-1;
		while (low<=high) {
			int mid=(low+high)>>>1 ;
			
			if (a[mid]<key) {
				low= mid +1;
			}else if(a[mid]>key) {
				high= mid-1;
			}else if (a[mid]==key) {
				index = mid;
				break;
			}
		}return index;
	}
	public static void main(String[] args) {
			Scanner sc = new Scanner (System.in);
			String jawaban=null;
		do {
		System.out.print("jumlah elemen bilangan ");
		int n= sc.nextInt();
		int[ ]a = new int [n];
		for (int c =0;c<n;c++) {
			a [c]= sc.nextInt();
		}
		for (int i =0;i<a.length-1;i++) {
			int minvalindex = 0;
			for 
		}
		System.out.print("bilangan yang dicari ");
		int key = 0;
		key = sc.nextInt();
		int low =0;
		int high = a.length-1;
		
		int index = Binarysearch(a,key,low,high);
		if (index > -1) {
			System.out.println(key+" tidak ditemukan");
			jawaban= sc.next();
		}else {
			System.out.println(key+" ada pada index "+index);
			jawaban = sc.next();
		}
		} while (jawaban.equalsIgnoreCase("ya"));  
	}

}
