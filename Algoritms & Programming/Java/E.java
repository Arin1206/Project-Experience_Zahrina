package alpro;

import java.util.LinkedList;

public class E {
	LinkedList data;

	E (){
		data = new LinkedList();
	}
	public void push(int value) {
		data.add(value);
	}
	public void print() {
		System.out.print(data);
	}
}
