public interface BufferInterface<T> {
    public boolean isEmpty();
    public boolean isFull();
    public int size();
    public void enQueue(T element);
    public T deQueue();
    public void viewAll();
}
