package alpro;

public class Node {

	int value;
	Node next;
	
	Node(int v,Node n){
		value=v;
		next=n;
	}
	public static void main(String[] args) {
	Node temp2=new Node (17,new Node (23 , new Node (34,null)));
	System.out.println(temp2.value);
	System.out.println(temp2.next.value);
	System.out.println(temp2.next.next.value);

}


} 
