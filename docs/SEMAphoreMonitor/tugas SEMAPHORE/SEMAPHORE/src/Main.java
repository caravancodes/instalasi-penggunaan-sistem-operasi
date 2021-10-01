import java.util.Scanner;
public class Main {
    public static void main(String[] args) {
        Scanner userin = new Scanner(System.in);
        Buffer antrian = new Buffer();
        while (true){
            System.out.println("Bounded-Buffer Problem");
            System.out.println("1. Produce");
            System.out.println("2. Consume");
            System.out.println("3. Jumlah data di buffer");
            System.out.println("4. Semaphore Status Flag");
            System.out.println("5. Lihat semua isi buffer");
            System.out.println("6. Exit\n");
            System.out.print("Pilihan : ");
            int pil = userin.nextInt();
            switch (pil){
                case 1:
                    System.out.print("Masukkan Data : ");
                    int data = userin.nextInt();
                    antrian.enQueue(data);
                    System.out.println();
                    break;
                case 2:
                    System.out.println();
                    System.out.println(antrian.deQueue());
                    System.out.println();
                    break;
                case 3:
                    System.out.println("\nJumlah elemen di antrian saat ini : "+antrian.size()+"\n");
                    break;
                case 4:
                    System.out.println("\nSemaphore Status Flag : "+antrian.semaphore()+"\n");
                    break;
                case 5:
                    antrian.viewAll();
                    System.out.println();
                    break;
                case 6:
                    System.exit(0);
                    break;
            }
        }
    }
}
