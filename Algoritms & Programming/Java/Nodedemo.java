package alpro;

public class Nodedemo {

	public static void main(String[] args) {
		Node n3 = new Node (30,null);
		Node n2 = new Node (20,n3);
		Node n1 = new Node (117,n2);
		
		Node myHead=n1;
		
		System.out.println(myHead.value+" "+myHead.next.value+" "+myHead.next.next.value);
	
		Node temp = new Node (117,new Node(20,new Node(30,null)));
		System.out.println(temp.value);
		System.out.println(temp.next.value); 
		System.out.println(temp.next.next.value);
		
		Node temp1 = new Node (30,null);
		temp1 = new Node (20, temp1);
		temp1 = new Node (117,temp1);
		System.out.println(temp1.value+" "+temp1.next.value+" "+temp1.next.next.value);
		
	}

}
