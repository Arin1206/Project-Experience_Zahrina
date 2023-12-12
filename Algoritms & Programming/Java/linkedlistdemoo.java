package alpro;

import java.util.LinkedList;

public class linkedlistdemoo {

	public static void main(String[] args) {
		
		LinkedList alist =new LinkedList ();
		
		alist.add(117);
		alist.add(30);
		alist.add(20);
		System.out.println(alist);
		Object removed = alist.remove(Integer.valueOf(30));
		Object removed1 = alist.remove(Integer.valueOf(117));
		System.out.print("nilai yang dibuang adalah : "+Integer.valueOf(30));
		System.out.println(" dan "+Integer.valueOf(117));
		System.out.println(alist);
		
	}

}
