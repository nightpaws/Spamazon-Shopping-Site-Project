package fillDB;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.util.ArrayList;
import java.util.StringTokenizer;

public class Builder {
	
	private ArrayList<Product> products = new ArrayList<Product>();
	private ArrayList<String> commands = new ArrayList<String>();
	private static String inputFile;
	
	public static void main(String args[]) {
		
		if(args.length != 1){
			System.out.println("your using this wrong");
		}
		
		inputFile = args[0];
		
		new Builder();
	}
	
	public Builder() {
		
		readfromfile();
		
		for(Product p: products){
			commands.addAll(p.buildSQLInjections());
		}
		
		writeToFile();
	}
	
	private void readfromfile(){
		
		BufferedReader br ;
		
		try{
			File file = new File(inputFile);
			
			if(!file.exists()){
				throw new FileNotFoundException();
			}
			
			FileReader fr = new FileReader(file);
			br= new BufferedReader(fr);
			
			while(true){
				
				//get String
				String productString = br.readLine();
				
				//Control
				if(productString == null){
					break;
				}else if(productString.startsWith("#")){
					continue;
				}
				
				//Get infor
				StringTokenizer st = new StringTokenizer(productString, ",");
				
				String name = st.nextToken();
				String sizesString = st.nextToken().trim();
				String colourString = st.nextToken().trim();
				String description = st.nextToken().trim();
				String mainCategory = st.nextToken().trim();
				String subCategory = st.nextToken().trim();
				String tinyCatergoy = st.nextToken().trim();
				int available = Integer.parseInt(st.nextToken());
				double price = Double.parseDouble(st.nextToken());
				String imageURL = st.nextToken();
				
				
				//Get sizes
				StringTokenizer stpart = new StringTokenizer(sizesString, ".");
				ArrayList<String> sizes = new ArrayList<String>();
				
				while(stpart.hasMoreTokens()){

					sizes.add(stpart.nextToken().trim());
				}
				
				//Get sizes
				stpart = new StringTokenizer(colourString, ".");
				ArrayList<String> colours = new ArrayList<String>();
				
				while(stpart.hasMoreTokens()){

					colours.add(stpart.nextToken().trim());
				}
				
				//build category
				String category = mainCategory + "-" + subCategory + "-" + tinyCatergoy;
				
				Product product = new Product(name, sizes, colours, description, category, available, price, imageURL);
				
				products.add(product);
				
			}
			
			br.close();
		}catch(Exception e){
			e.printStackTrace();
		}
	}
	
	private void writeToFile(){
		
		//Got time, rewrite this with JDBC to do the work.
		try {
			 
			 
			File file = new File("generated.sql");
 
			// if file doesnt exists, then create it
			if (!file.exists()) {
				file.createNewFile();
			}
 
			FileWriter fw = new FileWriter(file.getAbsoluteFile());
			BufferedWriter bw = new BufferedWriter(fw);
			
			for(String s: commands){
				bw.write(s);
				bw.write("\n");
			}
			
			
			bw.close();
 
			System.out.println("Done");
 
		} catch (IOException e) {
			e.printStackTrace();
		}	
	}
}

