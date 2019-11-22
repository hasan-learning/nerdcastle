namespace W6_DataHiding
{
    public class Account
    {
        public string AccountNumber { set; get; }
        public string CustomerName { set; get; }
        public double Balance { private set; get; }

        public Account(string accountNumber, string customerName):this()
        {
            AccountNumber = accountNumber;
            CustomerName = customerName;
        }

        public Account()
        {
            Balance = 0;
        }

        public string Deposit(double amount)
        {
            Balance += amount;
            return amount + " taka has been deposited."; 
        }

        public string Withdraw(double amount)
        {
            if (Balance - amount >= 0)
            {
                Balance -= amount;
                return amount + " taka has been withdrawn.";

            }
            else
            {
                return "No sufficient balance;";
            }
        }
    }
}
