package fillDB;

import java.util.ArrayList;
import java.util.Arrays;



public class Product {
	
	String name;
	ArrayList<String> sizes;
	ArrayList<String> colours;
	String description;
	int available;
	double price;
	String imageURL;
	String category;
	
	String insertCommand = "INSERT INTO `cs312_stock`(`name`, `size`, `colour`, `description`, `category`, `quantity`, `price`, `image`) VALUES (\"";
	String seperateStrings = "\",\"";
	String seperateStringFromNo = "\",";
	String seperateNoFromString = ",\"";
	String seperateNoFromNo = ",";
	String endCommand = "\");";
	
	public Product(String name, ArrayList<String> sizes, ArrayList<String> colours,
					String description, String category, int available, double price, String imageURL) {
	
		this.name = name;
		this.sizes = sizes;
		this.colours = colours;
		this.description = description;
		this.category = category;
		this. available = available;
		this.price = price;
		this.imageURL = imageURL;
	}
	
	public ArrayList<String> buildSQLInjections(){
		
		ArrayList<String> injections = new ArrayList<String>();
		
		for(String size: sizes){
			
			for(String colour: colours){
				
				StringBuilder sb = new StringBuilder();
				
				sb.append(insertCommand);
				sb.append(name);
				sb.append(seperateStrings);
				sb.append(size.toUpperCase());
				sb.append(seperateStrings);
				sb.append(colour.toUpperCase());
				sb.append(seperateStrings);
				sb.append(description);
				sb.append(seperateStrings);
				sb.append(category);
				sb.append(seperateStringFromNo);
				sb.append(available);
				sb.append(seperateNoFromNo);
				sb.append(price);
				sb.append(seperateNoFromString);
				sb.append(imageURL);
				sb.append(endCommand);
				
				injections.add(sb.toString());				
			}
		}
		
		return injections;
	}
}
