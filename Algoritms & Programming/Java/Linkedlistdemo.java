package alpro;

public class Linkedlistdemo {

	public static void main(String[] args) {
		
		Node temp = new Node (17,null);
		temp = new Node (23,temp);
		temp = new Node (97,temp);
		Node mylist=new Node (44,temp);
		
		System.out.println(mylist.value);
		System.out.println(mylist.next.value);
		System.out.println(mylist.next.next.value);
		System.out.println(mylist.next.next.next.value);
	
		Node temp2=new Node (17,new Node (23 , new Node (34,null)));
		System.out.println(temp2.value);
		System.out.println(temp2.next.value);
		System.out.println(temp2.next.next.value);
	
	}

	
}
