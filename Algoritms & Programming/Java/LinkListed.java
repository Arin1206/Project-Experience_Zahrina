package alpro;

public class LinkListed {
	Node head;
	
	public void add (int value) {
		head = new Node (value,head);
	}
	public int remove () {
		int value=head.value;
		head =head.next;
		return value;
	}
	public void print (){
		Node here =head;
		while (here !=null) {
			System.out.print(here.value+" ");
			here=here.next;
		}
		System.out.println();
	}

}
