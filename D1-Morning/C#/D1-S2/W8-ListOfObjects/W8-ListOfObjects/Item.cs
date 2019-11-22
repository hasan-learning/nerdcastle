using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace W8_ListOfObjects
{
    class Item
    {
        public string Code { set; get; }
        public string Name { set; get; }
        public double UnitPrice { set; get; }

        public Item(string code, string name, double unitPrice): this()
        {
            Code = code;
            Name = Name;
            UnitPrice = unitPrice;
        }

        public Item()
        { 
        }

    }
}
