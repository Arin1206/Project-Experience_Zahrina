package alpro;

public class BreakOpsional {

	public static void main(String[] args) {
		for (int i =0;i<12;i++)
			switch (i) {
			case 0,1,2,3,4:
				System.out.println("i Kurang dari 5");
			break;
			case 5,6,7,8,9 :
				System.out.println("i kurang dari 10");
			break;
			default :
				System.out.println("i sama dengan 10 atau lebih ");
			}

	}

}
