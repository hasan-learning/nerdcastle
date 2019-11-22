using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace W13_OneToOne
{
    public class Address
    {
        Address()
        {
        }

        public Address(string aptNo, string house, string road, string area, string thana, string district)
        : this()
        {
            AptNo = aptNo;
            House = house;
            Road = road;
            Area = area;
            Thana = thana;
            District = district;
        }
        public string AptNo { set; get; }
        public string House { set; get; }
        public string Road { set; get; }
        public string Area { set; get; }
        public string Thana { set; get; }
        public string District { set; get; }
    }
}
