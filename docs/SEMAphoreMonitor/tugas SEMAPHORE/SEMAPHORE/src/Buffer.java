public class Buffer<T> implements BufferInterface<T>{

    static final int BUFFERSIZE = 5;
    private T[] buffer;
    private int front=0;
    private int rear;
    private int size=0;
    int status = 0;

    public Buffer(){
        this(BUFFERSIZE);
    }
    public Buffer(int max){
        buffer = (T[]) new Object[max];
    }


    public int semaphore(){
        if (size() == 5){
            status = 1;
        }
        else if (size() == 0){
            status = -1;
        }
        else {
            status = 0;
        }
        return status;
    }

    @Override
    public void viewAll() {
        for (int i = 0; i < buffer.length; i++) {
            System.out.print(buffer[i]+" ");
        }
    }

    @Override
    public int size() {
        return size;
    }

    @Override
    public boolean isEmpty() {
        if (front == -1){
            return true;
        }
        else {
            return false;
        }
    }

    @Override
    public boolean isFull() {
        if (size() == buffer.length){
            return true;
        }
        else {
            return false;
        }
    }

    @Override
    //producernya
    public void enQueue(T element) {
        if (isFull() == true){
            System.out.println("\nBuffer Penuh!");
            System.out.println("Semaphore status flag : "+semaphore());
        }
        else {
            rear = (front + size) % buffer.length;
            buffer[rear] = element;
            size++;
        }
    }

    @Override
    //consumer
    public T deQueue() {
        if (size() == 0){
            status = -1;
            return null;
        }
        else {
            T temp = buffer[front];
            buffer[front] = null;
            front = (front+1) % buffer.length;
            size--;
            return temp;
        }
    }
}
