using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W8_ListOfObjects
{
    class Program
    {
        static void Main(string[] args)
        {
            Item item1 = new Item("I-917", "Sunsilk Shampoo", 300);
            Item item2 = new Item("I-252", "Dove Cream", 530);
            Item item3 = new Item("I-212", "Coke Can", 75);

            List<Item> items = new List<Item>();
            items.Add(item1);
            items.Add(item2);
            items.Add(item3);

            foreach (Item anItem in items)
            {
                Console.WriteLine(anItem.Code +  " " + anItem.Name + " " + anItem.UnitPrice);
            }

            Console.ReadKey();




        }
    }
}
