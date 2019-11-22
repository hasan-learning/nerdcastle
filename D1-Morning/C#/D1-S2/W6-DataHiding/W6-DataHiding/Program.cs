using System;
using System.Collections.Generic;
using System.Windows.Forms;

namespace W6_DataHiding
{
    static class Program
    {
        static void Main()
        {
            Account myAccount = new Account();
            myAccount.AccountNumber = "Sv-09782";
            myAccount.CustomerName = "Ali Hasan";
            //myAccount.Balance = 100;
            myAccount.Deposit(2000);
            myAccount.Withdraw(1200);
            Console.WriteLine(myAccount.Balance);
            Console.ReadKey();
        }
    }
}
